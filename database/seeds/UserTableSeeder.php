<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['username' => 'gmoreno', 'password' => '123456', 'nombres' => 'GILMAR', 'paterno' => 'MORENO', 'materno' => 'MEJIA' ]);
    }
}
