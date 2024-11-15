<?php

namespace App\Console\Commands;

use ReflectionClass;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class GeneratePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates permissions from all defined routes in the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->generatePermissionsFromRoutes();
        $this->generatePermissionsFromLivewireComponents();

        echo 'Permissions generated successfully.' . PHP_EOL;
    }

    protected function generatePermissionsFromRoutes()
    {
        $routes = Route::getRoutes();

        foreach ($routes as $route) {
            $action = $route->getAction();

            if (isset($action['controller'])) {
                $controllerAction = class_basename($action['controller']);

                if (str_contains($controllerAction, '@')) {
                    list($controller, $method) = explode('@', $controllerAction);

                    // Generate more descriptive permission names
                    $controller = strtolower(str_replace('Controller', '', $controller));
                    $method = strtolower($method);
                    $permissionName = "{$controller}.{$method}";

                    Permission::firstOrCreate(['name' => $permissionName, 'guard_name' => 'web']);
                } else {
                    echo "Skipping route: {$controllerAction} - no method found." . PHP_EOL;
                }
            }
        }
    }

    protected function generatePermissionsFromLivewireComponents()
    {
        $livewirePath = app_path('Livewire');

        if (!File::exists($livewirePath)) {
            $this->info("Das Livewire-Verzeichnis existiert nicht: {$livewirePath}");
            return;
        }

        $files = File::allFiles($livewirePath);

        foreach ($files as $file) {
            $className = 'App\\Livewire\\' . str_replace('/', '\\', $file->getRelativePathname());
            $className = str_replace('.php', '', $className);

            if (class_exists($className)) {
                $reflection = new ReflectionClass($className);
                $methods = $reflection->getMethods(\ReflectionMethod::IS_PUBLIC);

                foreach ($methods as $method) {
                    if ($method->class === $reflection->getName() && !$method->isConstructor() && $method->isPublic()) {
                        // Generate more descriptive permission names for Livewire components
                        $componentName = strtolower($reflection->getShortName());
                        $methodName = strtolower($method->getName());
                        $permissionName = "livewire.{$componentName}.{$methodName}";

                        Permission::firstOrCreate(['name' => $permissionName, 'guard_name' => 'web']);
                    }
                }
            }
        }
    }
}
