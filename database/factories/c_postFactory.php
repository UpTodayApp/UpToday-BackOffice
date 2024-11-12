<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class c_postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "post_id" =>  rand(1, 10),
            "usuario_id" =>  rand(1, 10),
        ];
    }
}
