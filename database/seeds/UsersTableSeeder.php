<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('welkom01');

        User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);
    }
}
