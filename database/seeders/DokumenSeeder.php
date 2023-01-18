<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            'nama' => 'BPP'
        ]);
        DB::table('documents')->insert([
            'nama' => 'FSD'
        ]);
        DB::table('documents')->insert([
            'nama' => 'BRD'
        ]);
        DB::table('documents')->insert([
            'nama' => 'UAT Script'
        ]);
        DB::table('documents')->insert([
            'nama' => 'BAST'
        ]);
    }
}
