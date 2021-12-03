<?php

namespace Database\Seeders;

use App\Models\RescuerRescue;
use App\Models\RescuerRole;
use Illuminate\Database\Seeder;

class RescuerRescueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RescuerRescue::factory()
            ->count(5)
            ->has(
                RescuerRole::factory()
                    ->count(20)
            )
            ->create();
    }
}
