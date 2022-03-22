<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Producto'=>$this->faker->randomelement(['expulsina','Urea','sulfato de amonio','poliductos']),
    'existencia'=>$this->faker->numberBetween(100,200),
    'entrada'=>$this->faker->numberBetween(500,1000),
    'salida'=>$this->faker->numberBetween(1,50),
            'Resivido_Por'=>$this->faker->firstName,
    'Fecha_EntroProd'=>$this->faker->dateTimeBetween('-3 year','-1 year')

        ];
    }
}
