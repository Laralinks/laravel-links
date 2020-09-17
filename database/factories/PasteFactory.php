<?php

namespace Database\Factories;

use App\Models\Paste;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PasteLanguage;

class PasteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paste::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'code' => $this->faker->paragraph,
            'paste_language_id' => PasteLanguage::factory(),
            'private' => false,
            'password' => null,
        ];
    }


}
