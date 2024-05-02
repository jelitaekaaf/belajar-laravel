<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merks = [
            ['nama_merk'=>'Le Minerale'],
            ['nama_merk'=>'A B C'],
            ['nama_merk'=>'Roma'],
         ];
    
        // masukkan data ke database
        DB::table('merks')->insert($merks);
    }
}
