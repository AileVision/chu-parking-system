<?php

namespace Database\Factories;

use App\Models\Moto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entree>
 */
class EntreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement(User::pluck('id')->toArray()),
            'moto_id' => fake()->randomElement(Moto::pluck('id')->toArray()),
            'entree_datetime' => fake()->dateTimeBetween('-7 days','now'),
            'ticket_number' => fake()->unique()->randomNumber(6)
        ];
    }
}
