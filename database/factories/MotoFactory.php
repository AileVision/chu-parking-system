<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Moto>
 */
class MotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'immatriculation' => fake()->regexify('[A-Z]{3}-[0-9]{3}'), // Générez un numéro d'immatriculation
        'tel_proprietaire' => fake()->phoneNumber, // Générez un numéro de téléphone aléatoire
        ];
    }
}
