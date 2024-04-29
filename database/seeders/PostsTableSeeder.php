<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // mendukung supaya data nya bisa masuk ke dlm dtbs

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $posts = [
        ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
        ['title'=>'Haruskah Menunda Nikah?', 'content'=>'lorem ipsum'],
        ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
        ];

    // masukkan data ke database
    DB::table('posts')->insert($posts);
    }
    }
 
