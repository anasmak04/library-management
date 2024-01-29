<?php

namespace Database\Seeders;

use App\Models\Livre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livre::create([
            'title' => 'Example Livre 1',
            'author' => 'jhon smith',
            'genre' => 'romantique',
            'description' => 'test livre',
            'publication_year' => '2024/01/28',
            'total_copies' => '50',
            'available_copies' => '20'
        ]);
    }
}
