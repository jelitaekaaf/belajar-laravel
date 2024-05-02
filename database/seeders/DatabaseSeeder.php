<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PostsTableSeeder::class);
        //$this->call(BarangsTableSeeder::class);
        //$this->call(SiswasTableSeeder::class);
        //$this->call(PenggunasTableSeeder::class);  
        //$this->call(TeleponsTableSeeder::class);
        $this->call(MerksTableSeeder::class);
        $this->call(ProduksTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
