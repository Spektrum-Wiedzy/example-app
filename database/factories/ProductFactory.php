<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\DeliveryMethod;
use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function bin2hex;
use function implode;
use function rand;
use function random_bytes;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => 'Product '.Str::random(5),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 1, 9999),
        ];
    }
}

