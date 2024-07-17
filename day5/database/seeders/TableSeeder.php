<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tables')->insert([
            [
                'customer_name' => 'Table 1',
                'quantity' => 2,
                "status" => 1
            ],
            [
                'customer_name' => 'Table 2',
                'quantity' => 2,
                "status" => 1
            ],
            [
                'customer_name' => 'Table 3',
                'quantity' => 2,
                "status" => 1
            ],
        ]);
    }
}
