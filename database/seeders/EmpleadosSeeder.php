<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleados;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleados::Factory(600)->create();
        //
    }
}
