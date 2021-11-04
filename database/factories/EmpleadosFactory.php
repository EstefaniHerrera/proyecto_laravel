<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreEmpleados'=> $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=>$this->faker->phoneNumber,
            'direccion'=>$this->faker->address,
            'sueldo'=>$this->faker->randomFloat(2, 10000, 20000),
            //
        ];
    }
}
