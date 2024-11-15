<?php

namespace App\Services;

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionsFromControllers
{
    public static function generate()
    {
        $routes = Route::getRoutes();

        foreach ($routes as $route) {
            $action = $route->getAction();

            if (isset($action['controller'])) {
                // Holen des Controllers und der Methode
                $controllerAction = class_basename($action['controller']);
                list($controller, $method) = explode('@', $controllerAction);

                // Berechtigung im Muster "controller.method" erstellen
                $permissionName = strtolower($controller) . '.' . $method;
                Permission::firstOrCreate(['name' => $permissionName, 'guard_name' => 'web']);
            }
        }
    }
}
