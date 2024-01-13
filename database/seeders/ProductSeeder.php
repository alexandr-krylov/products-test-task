<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'prodct1', 'category' => 'category1', 'description' => 'desceription1'],
            ['name' => 'prodct2', 'category' => 'category1', 'description' => 'desceription2'],
            ['name' => 'prodct3', 'category' => 'category1', 'description' => 'desceription3'],
            ['name' => 'prodct4', 'category' => 'category2', 'description' => 'desceription4'],
            ['name' => 'prodct5', 'category' => 'category2', 'description' => 'desceription5'],
            ['name' => 'prodct6', 'category' => 'category2', 'description' => 'desceription6'],
        ]);
    }
}
