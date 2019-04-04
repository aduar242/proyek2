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
        User::create([
            'name' => 'Agen',
            'email' => 'agen@gmail.com',
            'password' => bcrypt('agen'),
            'status' => true  
        ]


    );
    }
}
