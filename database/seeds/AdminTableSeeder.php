<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => 'User',
            'brand_name' => 'AdminBrand',
            'phone_1' => '1234567890',
            'phone_2' => '0943495340',
            'picture' => 'admin.jpg',
            'location' => 'Abuja',
            'role_id' => '3',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'fname' => 'John',
            'lname' => 'Paul',
            'phone_1' => '08038049835',
            'role_id' => '1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
