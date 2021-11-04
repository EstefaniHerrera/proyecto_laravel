<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreProducto'=>$this->faker->word,
            'precioCompra'=>$this->faker->randomFloat(2, 1000, 2000),
            'precioVenta'=>$this->faker->randomFloat(2, 2000, 2500),
            'cantidadExistencia'=>$this->faker->numberbetween(70, 2000),
            //
        ];
    }
}
