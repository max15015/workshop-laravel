<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([[
            'title' => 'Harry potter',
            'pages' => 250,
            'quantity' => 100
        ],
        [
            'title' => 'Hunger games',
            'pages' => 255,
            'quantity' => 60
        ],
        [
            'title' => 'Divergente',
            'pages' => 400,
            'quantity' => 6000
        ]
        ]
        );
    }
}
