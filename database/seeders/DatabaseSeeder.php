<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\RescuerRescue;
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
        $this->call([
            CategorySeeder::class,

            RescueSeeder::class,
            BoatSeeder::class,
            RescuerRescueSeeder::class,
            DecorationSeeder::class
        ]);
    }
}
