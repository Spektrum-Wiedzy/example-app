<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;
use function count;
use function rand;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->create()->images()->createMany([
            [
                'url' => "https://x3dshop.com/storage/uploads/drukarka-3d-creality%20ender-5-fdm-duze-pole-robocze-pla-abs-tpu.webp",
            ],
            [
                'url' => "https://x3dshop.com/storage/uploads/drukarka-3d-creality%20ender-5-fdm-duze-pole-robocze-pla-abs-tpu-bok.webp",
            ]
        ]);
    }
}
