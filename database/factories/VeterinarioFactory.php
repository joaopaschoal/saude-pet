<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Especialidade;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veterinario>
 */
class VeterinarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'crmv' => str_pad(fake()->numberBetween(0, 99999), 5, '0', STR_PAD_LEFT),
            'nome' => fake()->name(),
            'nascimento' => fake()->optional()->date(),
            'especialidade_id' => Especialidade::inRandomOrder()->first()->id,
        ];
    }
}
