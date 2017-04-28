<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder 
{
    public function run()
    {
        Model::unguard();


        DB::table('posts')->delete();
        DB::table('users')->delete();

        $this->call('UserTableSeeder');
        $this->call('PostTableSeeder');

        Model::reguard();
    }
}