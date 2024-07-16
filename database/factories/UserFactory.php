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
            'name' => 'admin',
            'email' => 'dat.compativelycomplex@gmail.com',
            'provider' => 'facebook',
            'provider_id' => 3453453463267,
            'email_verified_at' => now(),
            'password' => '$2y$10$h7vmF1tgXu0OAg.BvmZrjOs38vLoRJXAXAtZ4jI7X4ZsnkSM/HT0m', // password
            'remember_token' => Str::random(10),
            'role' => 3,
        ];
    }
}
