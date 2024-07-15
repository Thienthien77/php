<?php

namespace Database\Seeders;

use App\Models\Table;
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

        DB::table('tables')->truncate();
        // DB::table('tables')->insert([
        //     [
        //         'customer_name' => null,
        //         'quantity' => null,
        //         'status' => null,
        //     ],
        //     [
        //         'customer_name' => null,
        //         'quantity' => null,
        //         'status' => null,
        //     ],
        //     [
        //         'customer_name' => null,
        //         'quantity' => null,
        //         'status' => null,
        //     ],
        //     [
        //         'customer_name' => null,
        //         'quantity' => null,
        //         'status' => null,
        //     ],
        //     [
        //         'customer_name' => null,
        //         'quantity' => null,
        //         'status' => null,
        //     ]
        // ]);


        Table::factory(10)->create();

    }
}
