<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             'nombre_vendedor'=>$this->faker->firstName,
            'Tel_Agrocampo'=>$this->faker->e164PhoneNumber(),
             'Codig_Factura'=>$this->faker->unique()->numerify('#####'),
             'Nombre_Cliente'=>$this->faker->name,
             'id_cliente'=>$this->faker->numerify('####-').$this->faker->numberbetween(1950,2008).
             $this->faker->unique()->numerify('-#####'),
             'productos'=>$this->faker->randomElement(['expulsina','Urea','sulfato de amonio','poliductos']),
             'cantidad'=>$this->faker->numberBetween(1,100),
             'precio'=>$this->faker->numberBetween(25,500),
             'ISV'=>$this->faker->numerify('##'),
             'total'=>$this->faker->numberBetween(100,5000)
        ];
    }
}
