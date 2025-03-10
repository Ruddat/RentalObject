<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UtilityCostsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1234@example.com',
        ]);

        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UtilityCostsSeeder::class);
        $this->call([
            PropertyTypeSeeder::class,
            PropertyCategorySeeder::class,
        ]);
        $this->call(AttributeGroupsAndAttributesSeeder::class);
       // $this->call(ObjPropertiesSeeder::class);

    }

}
