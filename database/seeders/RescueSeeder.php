<?php

namespace Database\Seeders;

use App\Models\Boat;
use App\Models\Castaway;
use App\Models\Castawayboat;
use App\Models\Decoration;
use App\Models\DecorationRescuer;
use App\Models\Rescue;
use App\Models\Rescuer;
use App\Models\RescuerRescue;
use App\Models\RescuerRole;
use App\Models\Station;
use App\Models\Testimony;
use Illuminate\Database\Seeder;

class RescueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rescue::factory()
            ->count(30)
            ->hasAttached(
                Castaway::factory()
                    ->count(20)
            )
            ->has(
                Testimony::factory()
                    ->count(5)
                    ->has(
                        Rescuer::factory()
                            ->count(15)
                    )
            )
            ->has(
                Castawayboat::factory()
                    ->count(10)
            )
            ->hasAttached(
                Boat::factory()
                    ->count(10)
                    ->for(
                        Station::factory()
                    )
            )
            ->create();
    }
}
