<?php

use Illuminate\Database\Seeder;
use App\Models\Promocion;

class PromocionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promocion::create(['slug' => 'ninguno','nombre' => 'NINGUNO', 'descuento' => '0', 'imagen' => '']);
    }
}
