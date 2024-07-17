<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Foodseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('foods')->insert([
            [
                'name' => 'Burger',
                'img' => "thienthien.png",
                "price" => 17
            ],
            [
               'name' => 'FriedChicken',
                'img' => "thienthien.png",
                "price" => 77
            ],
            [
                'name' => 'Salad',
                'img' => "thienthien.png",
                "price" => 99
            ],
        ]);
    }
}
