<?php

use Illuminate\Database\Seeder;
use App\Models\Somos;

class QuienesSomosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Somos::create(['titulo' => 'PRUEBA', 'descripcion' => 'DESCRIPCION DE PRUEBA', 'imagen' => '']);
    }
}
