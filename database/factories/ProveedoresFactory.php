<?php

namespace Database\Factories;

use App\Models\Proveedores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreProveedor'=> $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->phoneNumber,
            'empresa'=>$this->faker->company,
            'direccionEmpresa'=>$this->faker->address,
            //
        ];
    }
}
