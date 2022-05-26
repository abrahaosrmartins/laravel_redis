<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        ini_set('memory_limit', '512M');
        Noticia::factory(1000)->create();
    }
}
