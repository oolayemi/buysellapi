<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'addressTitle' => $this->faker->streetName,
            'country' => $this->faker->country,
            'streetAddress' => $this->faker->streetAddress,
            'streetAddress2' =>  $this->faker->randomElement(array('', $this->faker->streetAddress)),
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zipCode' => $this->faker->postcode,
            'phoneNumber' => $this->faker->phoneNumber
        ];
    }
}
