<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('operator123'),
            'role' => 'operator',
        ]);

        DB::table('users')->insert([
            'name' => 'User Bank A',
            'email' => 'userbanka@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'client',
            'client_id' => 1,
        ]);
    }
}
