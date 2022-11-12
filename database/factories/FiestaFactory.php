<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fiesta>
 */
class FiestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence(),
            'descripcion' =>$this->faker->paragraph(),
            'invitados' =>$this->faker->randomFloat(null,50,300),
            'categoria' =>$this->faker->randomElement(['+18','+13'])
        ];
    }
}
