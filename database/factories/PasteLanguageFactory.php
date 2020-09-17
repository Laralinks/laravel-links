<?php

namespace Database\Factories;

use App\Models\PasteLanguage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PasteLanguageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PasteLanguage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'key' => $this->faker->name,
        ];
    }
}
