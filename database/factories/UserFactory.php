<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,  // Ensure this matches your Users table
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Default password
            'remember_token' => Str::random(10),
        ];
    }
}
