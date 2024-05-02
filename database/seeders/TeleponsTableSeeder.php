<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon'=>'0987654534', 'pengguna_id' => 1],
            ['nomor_telepon'=>'0876765623', 'pengguna_id' => 2],
            ['nomor_telepon'=>'0854323429', 'pengguna_id' => 3],
         ];
    
        // masukkan data ke database
        DB::table('telepons')->insert($telepons);
    }
}
