<?php

namespace Database\Seeders;

use App\Models\Emprunt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmpruntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(): void
    {
        Emprunt::create([
            "description" => "a reservation",
            "reservation_date" => "2024/01/29",
            "return_date" => "2024/02/08",
            "livre_id" => "1",
            "user_id" => "1"
        ]);
    }
}
