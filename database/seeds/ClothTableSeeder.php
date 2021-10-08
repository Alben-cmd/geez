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
            'slug' => 'cloth 1',
            'details' => 'men top',
            'price' => 149999,
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'
        ]);

         Cloth::create([
            'name' => 'cloth 2',
            'slug' => 'cloth 2',
            'details' => 'Women top',
            'price' => 139999,
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'
        ]);

          Cloth::create([
            'name' => 'cloth 3',
            'slug' => 'cloth 3',
            'details' => 'Children top',
            'price' => 129999,
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'
        ]);

           Cloth::create([
            'name' => 'cloth 4',
            'slug' => 'cloth 4',
            'details' => 'Unisex top',
            'price' => 119999,
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'
        ]);

            Cloth::create([
            'name' => 'cloth 5',
            'slug' => 'cloth 5',
            'details' => 'men Pants',
            'price' => 169999,
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'
        ]);

             Cloth::create([
            'name' => 'cloth 6',
            'slug' => 'cloth 6',
            'details' => 'Women Pants',
            'price' => 199999,
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.'
        ]);
    }
}
