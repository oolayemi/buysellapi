<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Product::factory(60)->create();
        \App\Models\Category::factory(8)->create();
        \App\Models\Cart::factory(30)->create();
        \App\Models\Address::factory(30)->create();

    }
}
