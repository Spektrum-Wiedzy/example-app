<?php

namespace Database\Factories;

use App\Models\DayOffer;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use function now;
use function rand;

class DayOfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DayOffer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'product_id' => Product::all()->random()->id,
            'price' => function (array $attributes) {
                $price = Product::find($attributes['product_id'])->price;

                return rand($price / 5, $price / 1.5);
            },
            'sold' => rand(0, 9),
            'limit' => $this->faker->randomElement([10, 20, 50, 100]),
            'starts_at' => Carbon::now()->addDay(),
            'ends_at' => Carbon::now()->addDays(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
