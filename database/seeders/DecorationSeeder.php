<?php

namespace Database\Seeders;

use App\Models\Decoration;
use App\Models\Rescuer;
use Illuminate\Database\Seeder;

class DecorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Decoration::factory()
            ->count(20)
            ->hasAttached(
                Rescuer::factory()
                    ->count(3),
                ['datetime' => date('Y-m-d H:i:s')]
            )
            ->create();
    }
}
