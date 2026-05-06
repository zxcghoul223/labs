<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Первая статья',
                'text' => 'Текст первой статьи.',
                'created_date' => '2025-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Вторая статья',
                'text' => 'Текст второй статьи.',
                'created_date' => '2025-02-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Третья статья',
                'text' => 'Текст третьей статьи.',
                'created_date' => '2025-03-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}