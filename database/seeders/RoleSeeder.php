<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'type' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'id' => 2,
                'type' => 'Author',
                'slug' => 'author',
            ],
        ]);
    }
}
