<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Vince';
        $user->email = 'vince@yahoo.com';
        $user->password = Hash::make('password');
        $user->save();

        $user1 = new \App\User();
        $user1->name = 'Gavin';
        $user1->email = 'gavin@yahoo.com';
        $user1->password = Hash::make('password');
        $user1->save();

        $user2 = new \App\User();
        $user2->name = 'Andrew';
        $user2->email = 'andrew@yahoo.com';
        $user2->password = Hash::make('password');
        $user2->save();

    }
}
