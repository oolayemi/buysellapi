<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'username' => $this->faker->unique()->userName,
            'gender' => $this->faker->randomElement(array("male", "female")),
            'birthday' => $this->faker->date(),
            'phoneNumber' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified' => $this->faker->randomElement(array(true, false)),
            'password' => bcrypt('password'), //password
            'role' => $this->faker->randomElement(array("user", "admin"))
        ];
    }
}
