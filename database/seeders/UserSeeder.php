<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'role_id' => 1,
            'name' => 'Mr. Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('rootadmin'),
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'role_id' => 2,
            'name' => 'Mr. Author',
            'email' => 'author@gmail.com',
            'password' => Hash::make('rootauthor'),
        ]);
    }
}
