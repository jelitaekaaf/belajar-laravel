<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Le Minerale 600 ml', 'jumlah'=>'1', 'tanggal_produk'=>'2024-06-12','id_merk'=>1],
            ['nama_produk'=>'Le Minerale 1000 ml', 'jumlah'=>'4', 'tanggal_produk'=>'2024-06-15','id_merk'=>1],
            ['nama_produk'=>'Aqua 500 ml', 'jumlah'=>'2', 'tanggal_produk'=>'2024-07-05','id_merk'=>2],
            ['nama_produk'=>'Aqua 800 ml', 'jumlah'=>'5', 'tanggal_produk'=>'2024-09-10','id_merk'=>2],
            ['nama_produk'=>'Roma Kelapa Cream', 'jumlah'=>'6', 'tanggal_produk'=>'2024-10-21','id_merk'=>3],
            ['nama_produk'=>'Roma Kelapa Kopyor', 'jumlah'=>'1', 'tanggal_produk'=>'2024-11-25','id_merk'=>3],
    
    
         ];
    
        // masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
