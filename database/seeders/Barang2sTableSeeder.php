<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang'=>'Buku Tulis', 'harga'=>'48.000', 'stok'=>'10 pak',],
            ['nama_barang'=>'Pensil 2B', 'harga'=>'5.000', 'stok'=>'50 pak',],
            ['nama_barang'=>'Penghapus', 'harga'=>'3.500', 'stok'=>'20 pak',]
         ];
    
        // masukkan data ke database
        DB::table('barang2s')->insert($barang2s);
    }
}
