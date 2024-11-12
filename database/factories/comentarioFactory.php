<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class comentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "contenido" => $this->faker->paragraph(2),
        ];
    }
}
