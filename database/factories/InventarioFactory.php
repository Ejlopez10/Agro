<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InventarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             'Nombre_Prod'=>$this->faker->randomelement(['expulsina','Urea','sulfato de amonio','poliductos']),
             'Fecha_Vence'=>$this->faker->date,
             'Lote'=>$this->faker->numberbetween(1000,10000),
             'Distribuidora'=>$this->faker->name
        ];
    }
}
