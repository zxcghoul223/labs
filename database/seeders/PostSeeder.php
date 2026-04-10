<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => Str::random(15),
                'text' => Str::random(100),
                'created_date' => date('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => Str::random(15),
                'text' => Str::random(100),
                'created_date' => date('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => Str::random(15),
                'text' => Str::random(100),
                'created_date' => date('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}