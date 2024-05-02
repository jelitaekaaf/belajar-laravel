<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'Abdu', 'jk'=>'Laki laki', 'alamat'=>'Rancamanyar', 'agama'=>'Islam', 'telepon'=>'62987898', 'email'=>'abdu@gmail.com'],
            ['nama'=>'Aisha', 'jk'=>'Perempuan', 'alamat'=>'Sukamenak', 'agama'=>'Islam', 'telepon'=>'62876564', 'email'=>'aisha@gmail.com'],
            ['nama'=>'Alvin', 'jk'=>'Laki laki','alamat'=>'Rancamanyar', 'agama'=>'Islam', 'telepon'=>'62975345', 'email'=>'alvin@gmail.com'],
            ['nama'=>'Cindy', 'jk'=>'Perempuan', 'alamat'=>'Bojong Suren', 'agama'=>'Islam', 'telepon'=>'62987564', 'email'=>'cindy@gmail.com'],
            ['nama'=>'Diki', 'jk'=>'Laki laki','alamat'=>'Cibaduyut', 'agama'=>'Islam', 'telepon'=>'62876423', 'email'=>'diki@gmail.com'],
            ['nama'=>'Faiz', 'jk'=>'Laki laki','alamat'=>'Cibaduyut', 'agama'=>'Islam', 'telepon'=>'62923212', 'email'=>'faiz@gmail.com'],
            ['nama'=>'Felisa', 'jk'=>'Perempuan', 'alamat'=>'Cibogo', 'agama'=>'Islam', 'telepon'=>'62987246', 'email'=>'felisa@gmail.com'],
            ['nama'=>'Ghazwan', 'jk'=>'Laki laki','alamat'=>'Cibaduyut', 'agama'=>'Islam', 'telepon'=>'62965647', 'email'=>'ghazwan@gmail.com'],
            ['nama'=>'Iyas', 'jk'=>'Laki laki', 'alamat'=>'Sukamenak', 'agama'=>'Islam', 'telepon'=>'62984328', 'email'=>'iyas@gmail.com'],
            ['nama'=>'Jelita', 'jk'=>'Perempuan','alamat'=>'Cangkuang', 'agama'=>'Islam', 'telepon'=>'62989673', 'email'=>'jelita@gmail.com']

         ];
    
        // masukkan data ke database
        DB::table('siswas')->insert($siswas);
    }
}
