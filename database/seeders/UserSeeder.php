<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Иван',
                'last_name' => 'Петров',
                'name' => 'ivan123',
                'email' => 'ivan@example.com',
                'password' => Hash::make('12345678'),
                'phone' => '+79001234567',
                'address' => 'ул. Примерная, д. 1',
                'birth_date' => '1990-01-01',
                'age' => 25,
                'salary' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Мария',
                'last_name' => 'Сидорова',
                'name' => 'maria789',
                'email' => 'maria@example.com',
                'password' => Hash::make('12345678'),
                'phone' => '+79009876543',
                'address' => 'ул. Новая, д. 5',
                'birth_date' => '2000-12-25',
                'age' => 22,
                'salary' => 60000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Петр',
                'last_name' => 'Иванов',
                'name' => 'petr456',
                'email' => 'petr@example.com',
                'password' => Hash::make('12345678'),
                'phone' => '+79007654321',
                'address' => 'ул. Тестовая, д. 10',
                'birth_date' => '1995-05-15',
                'age' => 30,
                'salary' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}