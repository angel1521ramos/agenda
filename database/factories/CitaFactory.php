<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cita>
 */
class CitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' =>$this->faker->numberBetween($min = 1, $max = 10),
            'paciente' =>$this->faker->name,
            'edad' =>$this->faker->randomDigit,
            'telefono' =>$this->faker->phoneNumber,
            'escolaridad' =>$this->faker->name,
            'horario' =>$this->faker->time,
            'observaciones' =>$this->faker->text($maxNbChars = 100)
        ];
    }
}
