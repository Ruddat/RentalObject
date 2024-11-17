<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define permissions
        $permissions = [
            'view dashboard',
            'manage settings',
            'manage users',
            'manage roles',
            'manage permissions',
            'manage profile',
            'manage profile settings',
            'edit articles',
            'delete articles',
            'publish articles',
            'create articles',
            'view sales',
            'manage orders',
            'manage products',
            'access all data',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Define roles and assign permissions to them
        $roles = [
            'super admin' => $permissions,
            'admin' => [
                'view dashboard',
                'manage settings',
                'manage users',
                'manage roles',
                'manage permissions',
                'manage profile',
                'manage profile settings',
                'edit articles',
                'delete articles',
                'publish articles',
                'create articles',
            ],
            'editor' => [
                'edit articles',
                'publish articles',
                'create articles',
            ],
            'seller' => [
                'view dashboard',
                'manage settings',
                'manage profile settings',
                'view sales',
                'manage orders',
                'manage products',
            ],
            'newuser' => [
                'view dashboard',
                'manage settings',
                'view sales',
                'manage orders',
                'manage products',
            ],
        ];

        // Create roles and assign permissions
        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            foreach ($rolePermissions as $permissionName) {
                $permission = Permission::where('name', $permissionName)->first();
                if ($permission) {
                    $role->givePermissionTo($permission);
                }
            }
        }

        // Define users to create with roles assigned
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('superadminpassword'),
                'role' => 'super admin',
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('adminpassword'),
                'role' => 'admin',
            ],
            [
                'name' => 'Editor User',
                'email' => 'editor@example.com',
                'password' => Hash::make('editorpassword'),
                'role' => 'editor',
            ],
            [
                'name' => 'Seller User',
                'email' => 'seller@example.com',
                'password' => Hash::make('sellerpassword'),
                'role' => 'seller',
            ],
        ];

        // Create users and assign roles
        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => $userData['password'],
                ]
            );

            if (!$user->hasRole($userData['role'])) {
                $user->assignRole($userData['role']);
            }
        }
    }
}
