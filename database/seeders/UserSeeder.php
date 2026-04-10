<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'ivan123',
                'first_name' => 'Иван',
                'last_name' => 'Иванов',
                'email' => 'ivan@example.com',
                'password' => Hash::make('password123'),
                'birth_date' => '1990-01-01',
                'age' => 25,
                'salary' => 50000,
                'phone' => '+79001234567',
                'address' => 'ул. Примерная, д. 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'petr456',
                'first_name' => 'Петр',
                'last_name' => 'Петров',
                'email' => 'petr@example.com',
                'password' => Hash::make('password123'),
                'birth_date' => '1995-05-15',
                'age' => 30,
                'salary' => 75000,
                'phone' => '+79007654321',
                'address' => 'ул. Тестовая, д. 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'maria789',
                'first_name' => 'Мария',
                'last_name' => 'Сидорова',
                'email' => 'maria@example.com',
                'password' => Hash::make('password123'),
                'birth_date' => '2000-12-25',
                'age' => 22,
                'salary' => 60000,
                'phone' => '+79009876543',
                'address' => 'ул. Новая, д. 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}