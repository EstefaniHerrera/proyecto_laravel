<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedores;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedores::Factory(600)->create();
        //
    }
}
