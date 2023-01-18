<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'nama' => 'Solutions'
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Consulting'
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Training'
        ]);
        DB::table('kategori')->insert([
            'nama' => 'Research'
        ]);
    }
}
