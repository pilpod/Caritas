<?php

namespace Database\Factories;

use App\Models\SpanishData;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpanishDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SpanishData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_content' => $this->faker()->word,
            'text_content' => $this->faker()->paragraph,
            'lang_id' => $this->faker()->numberBetween(1, 2),
            'section_id'=> $this->faker()->numberBetween(1, 5),

        ];
    }
}
