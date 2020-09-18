<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::factory()->create([
            'name' => 'Richard',
            'email' => 'richard@laravel.link',
            'password' => Hash::make('password'),
        ]);
    }
}
