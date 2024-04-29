<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Meja', 'jumlah'=>31],
            ['nama'=>'Kursi', 'jumlah'=>31],
            ['nama'=>'Papan Tulis', 'jumlah'=>2]
            ];
    
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
