<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TableProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Author User',
            'email' => 'author@mail.ru',
            'username' => 'Author Name',
            'password' => Hash::make('123')
        ]);
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'username' => 'Admin Name',
            'password' => Hash::make('123')
        ]);
        DB::table('users')->insert([
            'name' => 'User User',
            'email' => 'user@mail.ru',
            'username' => 'User Name',
            'password' => Hash::make('123')
        ]);


    }
}
