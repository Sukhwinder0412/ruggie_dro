<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'My Product title',
            'description' => 'An awesome product',
        ]);
    }
}
