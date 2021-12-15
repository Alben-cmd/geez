<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Men Top', 'slug' => 'men_top', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'Men Bottom', 'slug' => 'men_bottom', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'women', 'slug' => 'women', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'Children', 'slug' => 'Children', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'Party', 'slug' => 'Party', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'Ashebi', 'slug' => 'ashebi', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'Ankara', 'slug' => 'ankara', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'Accessories', 'slug' => 'accessories', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'others', 'slug' => 'others', 'created_at' =>$now, 'updated_at' => $now],

        ]);
    }
}
