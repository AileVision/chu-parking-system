<?php

namespace Database\Factories;

use App\Models\Moto;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArchivedTicket>
 */
class ArchivedTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'moto_id' => fake()->randomElement(Moto::pluck('id')->toArray()),
            'entree_datetime' => fake()->dateTimeBetween('-7 days','now'),
            'sortie_datetime' => fake()->dateTimeBetween('-7 days','now'),
            'ticket_id'=> fake()->randomElement(Ticket::pluck('id')->toArray()),
            'total_amount' => fake()->unique()->randomNumber(6),
            'status' => fake()->word,
        ];
    }
}
