<?php

namespace Database\Factories;

use App\Models\Entree;
use App\Models\Sortie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'entree_id' => fake()->randomElement(Entree::pluck('id')->toArray()),
            'sortie_id' => fake()->randomElement(Sortie::pluck('id')->toArray()),
            'ticket_number' => fake()->unique()->randomNumber(6),
            'entree_datetime'  => fake()->dateTimeBetween('-7 days','now'),
            'sortie_datetime' => fake()->dateTimeBetween('-7 days','now'),
            'total_amount' => fake()->numberBetween(50, 100),
            'status' => fake()->word,
        ];
    }
}
