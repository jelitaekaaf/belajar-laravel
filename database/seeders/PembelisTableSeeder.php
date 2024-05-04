<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli'=>'Dita', 'jenis_kelamin'=>'Perempuan'],
            ['nama_pembeli'=>'Laras', 'jenis_kelamin'=>'Perempuan'],
            ['nama_pembeli'=>'Ayu', 'jenis_kelamin'=>'Perempuan']
         ];
    
        // masukkan data ke database
        DB::table('pembelis')->insert($pembelis);
    }
}
