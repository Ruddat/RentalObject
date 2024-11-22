<?php

namespace Database\Seeders;

use App\Models\ModCustomer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModCustomer::create([
            'name' => 'Max Mustermann',
            'email' => 'max@example.com',
            'phone' => '123456789',
            'address' => 'Musterstraße 1',
            'city' => 'Musterstadt',
            'postal_code' => '12345',
        ]);

        ModCustomer::create([
            'name' => 'Anna Beispiel',
            'email' => 'anna@example.com',
            'phone' => '987654321',
            'address' => 'Beispielweg 2',
            'city' => 'Beispielstadt',
            'postal_code' => '54321',
        ]);
    }
}

