<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'quantity' => $this->faker->numberBetween(80, 180),
            'imageUrl' => $this->faker->imageUrl(300, 300),
            'rating' => $this->faker->randomFloat(2, 0.0, 5.0),
            'price' => $this->faker->randomFloat(2, 20.0, 990.0),
            'discount' =>  $this->faker->randomFloat(2, 0, 70.0),
            'specification' => $this->faker->paragraph(8),
        ];
    }
}
