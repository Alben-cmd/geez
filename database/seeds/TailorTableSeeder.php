<?php

use Illuminate\Database\Seeder;
use App\Tailor;

class TailorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Tailor::create([
            'name' => 'tailor 1',
            'address' => 'Abuja',
            'phone_1' => '0943495340',
            'phone_2' => '1943495340',
            'email' => 'tailor1@x.com',
            'profile_pic' =>'djadnpiadvn',
        ]);

         Tailor::create([
            'name' => 'tailor 2',
            'address' => 'Lagos',
            'phone_1' => '2943495340',
            'phone_2' => '2943495340',
            'email' => 'tailor2@x.com',
            'profile_pic' =>'djadnpiadvn',
        ]);

          Tailor::create([
            'name' => 'tailor 3',
            'address' => 'Abuja 3',
            'phone_1' => '3943495340',
            'phone_2' => '3943495340',
            'email' => 'tailor3@x.com',
            'profile_pic' =>'3djadnpiadvn',
        ]);

           Tailor::create([
            'name' => 'tailor 4',
            'address' => '4 Abuja',
            'phone_1' => '4943495340',
            'phone_2' => '4943495340',
            'email' => 'tailor4@x.com',
            'profile_pic' =>'4djadnpiadvn',
        ]);

            Tailor::create([
            'name' => 'tailor 5',
            'address' => '5 Abuja',
            'phone_1' => '5943495340',
            'phone_2' => '5943495340',
            'email' => 'tailor5@x.com',
            'profile_pic' =>'5djadnpiadvn',
        ]);

            Tailor::create([
            'name' => 'tailor 6',
            'address' => '6 Abuja',
            'phone_1' => '6943495340',
            'phone_2' => '6943495340',
            'email' => 'tailor6@x.com',
            'profile_pic' =>'6djadnpiadvn',
        ]);
    }
}
