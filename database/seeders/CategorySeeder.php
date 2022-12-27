<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [ 'name' => 'Book' ],
            [ 'name' => 'Kitchen' ],
            [ 'name' => 'Electronics' ],
            [ 'name' => 'Kids & Baby Fashion' ],
            [ 'name' => 'Moeslim Fashion' ],
            [ 'name' => 'Man Fashion' ],
            [ 'name' => 'Woman Fashion' ],
            [ 'name' => 'Film & Music' ],
            [ 'name' => 'Gaming' ],
            [ 'name' => 'Handphone & Tablet' ],
            [ 'name' => 'Mom & Baby' ],
            [ 'name' => 'Audio, Camera, & Other Electronics' ],
            [ 'name' => 'Beauty' ],
            [ 'name' => 'Health' ],
            [ 'name' => 'Computer & Laptop' ],
            [ 'name' => 'Gold' ],
            [ 'name' => 'Toys & Hobbies' ],
            [ 'name' => 'Food & Beverages' ],
            [ 'name' => 'Office & Stationery' ],
            [ 'name' => 'Sport' ],
            [ 'name' => 'Automotive' ],
            [ 'name' => 'Animal Care' ],
            [ 'name' => 'Body Care' ],
            [ 'name' => 'Party Supplies & Craft' ],
            [ 'name' => 'Household' ]
        ]);
    }
}
