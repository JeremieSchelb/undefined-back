<?php

namespace Database\Seeders;

use App\Models\Boat;
use App\Models\Station;
use Illuminate\Database\Seeder;

class BoatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boat::factory()
            ->count(10)
            ->has(
                Station::factory()
                    ->count(5)
            )
            ->create();
    }
}
