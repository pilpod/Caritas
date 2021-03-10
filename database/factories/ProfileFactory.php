<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Caritas Badalona',
            'direction' => 'Carrer blablabla',
            'city' => 'Badalona',
            'postcode' => '08500',
            'phone' => $this->faker->phoneNumber,
            'bankAccount' => $this->faker->bankAccountNumber, // password
            'bizum' => 1122121212,
            'user_id' => 1,
        ];
    }
}
