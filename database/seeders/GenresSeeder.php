<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genres;
class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Genres::factory()->times(20)->create();
        
    }
}
