<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'BPP',
            'desc' => 'Badan Perenanaan dan Pengembangan',
            'created_at' => Carbon::now()
        ]);
        DB::table('documents')->insert([
            'name' => 'FSD',
            'desc' => 'Functional Specification Document',
            'created_at' => Carbon::now()
        ]);
        DB::table('documents')->insert([
            'name' => 'BRD',
            'desc' => 'Business Requirements Document',
            'created_at' => Carbon::now()
        ]);
        DB::table('documents')->insert([
            'name' => 'UAT Script',
            'desc' => 'User Acceptance Test Script',
            'created_at' => Carbon::now()
        ]);
        DB::table('documents')->insert([
            'name' => 'BAST',
            'desc' => 'Berita Acara Serah Terima',
            'created_at' => Carbon::now()
        ]);
    }
}
