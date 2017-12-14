<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(QuienesSomosSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(SocialTableSeeder::class);
         $this->call(PromocionTableSeeder::class);
    }
}
