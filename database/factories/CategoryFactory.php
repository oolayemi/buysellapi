<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(array('Men Shirt', 'Dress', 'Man Work Equipment', 'Woman Bag', 'Men Shoes', 'High Heels', 'Gown', 'Gloves')),
            'imageUrl' => $this->faker->randomElement(array('menshirt.png', 'dress.png', 'menworkequipment.png', 'womanbag.png', 'menshoes.png', 'womanshoes.png'))
        ];
    }


}




















