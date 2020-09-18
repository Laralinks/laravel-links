<?php

namespace Database\Seeders;

use App\Models\PasteLanguage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PasteLanguageSeeder extends Seeder
{


    public $languages = [
        'Php',
        'HTML',
        'Java',
    ];



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->languages as $name) {
            PasteLanguage::factory()->create([
                'name' => $name,
                'key' => Str::slug(Str::lower($name)),
            ]);
        }
    }
}
