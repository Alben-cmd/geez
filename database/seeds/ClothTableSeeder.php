<?php

use Illuminate\Database\Seeder;
use App\Cloth;

class ClothTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cloth::create([
            'name' => 'cloth 1',
            'trending' => '0',
            'category' => 'Men Top',
            'image' => '0943495340',
            'slug' => 'cloth 1',
            'price' => 149999,
        ]);

         Cloth::create([
            'name' => 'cloth 2',
            'trending' => '0',
            'category' => 'Men Top 2',
            'image' => 'sddvsdvvvs',
            'slug' => 'cloth 2',
            'price' => 1343232,
        ]);

          Cloth::create([
            'name' => 'cloth 3',
            'trending' => '0',
            'category' => 'Men Top 3',
            'image' => 'fwfwefwe',
            'slug' => 'cloth 3',
            'price' => 123231,
        ]);

           Cloth::create([
            'name' => 'cloth 4',
            'trending' => '0',
            'category' => 'Men Top 4',
            'image' => '0sdvsdsv',
            'slug' => 'cloth 4',
            'price' => 12321,
        ]);

            Cloth::create([
            'name' => 'cloth 5',
            'trending' => '0',
            'category' => 'Men Top 5',
            'image' => '09dvsdvsdv',
            'slug' => 'cloth 5',
            'price' => 134323,
        ]);

             Cloth::create([
            'name' => 'cloth 6',
            'trending' => '0',
            'category' => 'Men Top 6',
            'image' => '0wwfawvwe',
            'slug' => 'cloth 6',
            'price' => 1454223,
        ]);
    }
}
