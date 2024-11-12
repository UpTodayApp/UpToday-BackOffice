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
        \App\Models\usuario::factory(10)->create();
        \App\Models\post::factory(10)->create();
        \App\Models\comentario::factory(10)->create();
        \App\Models\megusta::factory(10)->create();
        \App\Models\c_post::factory(10)->create();
        
    }
}
