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
            'trending' => '1',
            'category' => 'Ankara',
            'image' => 'cloth_1.jpg',
            'slug' => 'cloth_1',
            'details' =>'good clothes',
            'tailor_id' =>'1',
            'price' => 3000000,
        ])->categories()->attach(7);

         Cloth::create([
            'name' => 'cloth 2',
            'trending' => '0',
            'category' => 'Women',
            'image' => 'cloth_2.jpg',
            'slug' => 'cloth_2',
            'details' =>'good clothes',
            'tailor_id' =>'1',
            'price' => 4000099,
        ])->categories()->attach(3);

          Cloth::create([
            'name' => 'cloth 3',
            'trending' => '1',
            'category' => 'Men Top',
            'image' => 'cloth_3.jpg',
            'slug' => 'cloth_3',
            'details' =>'good clothes',
            'tailor_id' =>'2',
            'price' => 5000099,
        ])->categories()->attach(1);

           Cloth::create([
            'name' => 'cloth 4',
            'trending' => '0',
            'category' => 'Women',
            'image' => 'cloth_4.jpg',
            'slug' => 'cloth_4',
            'details' =>'good clothes',
            'tailor_id' =>'2',
            'price' => 6000099,
        ])->categories()->attach(3);

            Cloth::create([
            'name' => 'cloth 5',
            'trending' => '1',
            'category' => 'Men Top',
            'image' => 'cloth_5.jpg',
            'slug' => 'cloth_5',
            'details' =>'good clothes',
            'tailor_id' =>'3',
            'price' => 2000099,
        ])->categories()->attach(1);

            Cloth::create([
            'name' => 'cloth 6',
            'trending' => '0',
            'category' => 'Others',
            'image' => 'cloth_6.jpg',
            'slug' => 'cloth_6',
            'details' =>'good clothes',
            'tailor_id' =>'3',
            'price' => 1000099,
        ])->categories()->attach(9);

             Cloth::create([
            'name' => 'cloth 7',
            'trending' => '1',
            'category' => 'Ankara',
            'image' => 'cloth_7.jpg',
            'slug' => 'cloth_7',
            'details' =>'good clothes',
            'tailor_id' =>'4',
            'price' => 1499999,
        ])->categories()->attach(7);

              Cloth::create([
            'name' => 'cloth 8',
            'trending' => '0',
            'category' => 'Ankara',
            'image' => 'cloth_8.jpg',
            'slug' => 'cloth_8',
            'details' =>'good clothes',
            'tailor_id' =>'4',
            'price' => 2999999,
        ])->categories()->attach(7);

               Cloth::create([
            'name' => 'cloth 9',
            'trending' => '1',
            'category' => 'Ankara',
            'image' => 'cloth_9.jpg',
            'slug' => 'cloth_9',
            'details' =>'good clothes',
            'tailor_id' =>'5',
            'price' => 1699999,
        ])->categories()->attach(7);

                Cloth::create([
            'name' => 'cloth 10',
            'trending' => '0',
            'category' => 'Ankara',
            'image' => 'cloth_10.jpg',
            'slug' => 'cloth_10',
            'details' =>'good clothes',
            'tailor_id' =>'5',
            'price' => 1200000,
        ])->categories()->attach(7);
    }
}
