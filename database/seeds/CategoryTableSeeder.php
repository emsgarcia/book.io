<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
        	['name' => 'Sci-fi', 'created_at' => NULL, 'updated_at' => NULL],
        	['name' => 'Suspense', 'created_at' => NULL, 'updated_at' => NULL],
        	['name' => 'Religious', 'created_at' => NULL, 'updated_at' => NULL],
        	['name' => 'Romance', 'created_at' => NULL, 'updated_at' => NULL]

        ]);
    }
}
