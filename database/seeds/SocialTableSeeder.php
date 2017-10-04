<?php

use Illuminate\Database\Seeder;
use App\Models\Social;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create(['facebook' => 'https://www.facebook.com/pages/Relojeria-y-joyeria-Espinoza/435028863186721', 'twitter' => 'https://www.facebook.com/pages/Relojeria-y-joyeria-Espinoza/435028863186721']);
    }
}
