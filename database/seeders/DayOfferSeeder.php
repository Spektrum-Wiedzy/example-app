<?php

namespace Database\Seeders;

use App\Models\DayOffer;
use App\Models\Image;
use Illuminate\Database\Seeder;
use function now;

class DayOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DayOffer::factory()->create([
            'starts_at' => now(),
            'ends_at' => now()->addDay(),
        ]);
    }
}
