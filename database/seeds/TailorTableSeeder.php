<?php

use Illuminate\Database\Seeder;
use App\User;

class TailorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'fname' => 'Tailor',
            'lname' => 'One',
            'picture' => 'tailor_1.jpg',
            'brand_name' => 'Tailor One',
            'phone_1' => '07038049831',
            'phone_2' => '0943495340',
            'location' => 'Abuja',
            'role_id' => '2',
            'email' => 'tailor1@gmail.com',
            'password' => bcrypt('password'),
        ]);

         User::create([
            'fname' => 'Tailor',
            'lname' => 'Two',
            'picture' => 'tailor_2.jpg',
            'brand_name' => 'Tailor Two',
            'phone_1' => '07038049832',
            'phone_2' => '0943495340',
            'location' => 'Jos',
            'role_id' => '2',
            'email' => 'tailor2@gmail.com',
            'password' => bcrypt('password'),
        ]);
         User::create([
            'fname' => 'Tailor',
            'lname' => 'Three',
            'picture' => 'tailor_3.jpg',
            'brand_name' => 'Tailor Three',
            'phone_1' => '07038049833',
            'phone_2' => '0943495340',
            'location' => 'Lagos',
            'role_id' => '2',
            'email' => 'tailor3@gmail.com',
            'password' => bcrypt('password'),
        ]);
         User::create([
            'fname' => 'Tailor',
            'lname' => 'Four',
            'picture' => 'tailor_4.jpg',
            'brand_name' => 'Tailor Four',
            'phone_1' => '07038049834',
            'phone_2' => '0943495340',
            'location' => 'Kano',
            'role_id' => '2',
            'email' => 'tailor4@gmail.com',
            'password' => bcrypt('password'),
        ]);
         User::create([
            'fname' => 'Tailor',
            'lname' => 'Five',
            'picture' => 'tailor_5.jpg',
            'brand_name' => 'Tailor Five',
            'phone_1' => '07038049835',
            'phone_2' => '0943495340',
            'location' => 'Kaduna',
            'role_id' => '2',
            'email' => 'tailor5@gmail.com',
            'password' => bcrypt('password'),
        ]);
         User::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'phone_1' => '08038049835',
            'role_id' => '1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);

    }
}
