<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 50; $i++) { 
            $user = new \App\User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = 'secret';
            $user->save();
        }
    }
}