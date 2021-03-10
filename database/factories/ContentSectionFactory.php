<?php

namespace Database\Factories;

use App\Models\ContentSection;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentSectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContentSection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'section_name' => 'about',
            'section_image' => null
            
        ];
    }
}
