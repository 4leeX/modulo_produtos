<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'valor' => $this->faker->numberBetween(0, 500),
            'cod_barras' => $this->faker->numberBetween(100000000000, 999999999999),
            'icms' => Str::random(15),
            'ipi' => Str::random(15),
            'descricao' => $this->faker->text(200),
        ];
    }
}
