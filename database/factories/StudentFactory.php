<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => 'male',
            'birth_date' => '1999-01-01',
            'gov' => 'نينوى',
            'address' => 'البيت',
            'study_type' => 'm',
            'acceptance_year' => '33',
            'is_parallel' => false,
        ];
    }
}
