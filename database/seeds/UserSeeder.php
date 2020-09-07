<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin12345'),
        ])->assignRole('admin');

        //Workers


        //Clients
        User::create([
            'name' => 'José',
            'last_name' => 'Perez',
            'email' => 'josé_perez@example.com',
            'mobile_phone' => '9995656523',
            'local_phone' => '9854612',
            'password' => Hash::make('admin12345'),
        ])->assignRole('client');

        User::create([
            'name' => 'Pedro',
            'last_name' => 'Gonzalez',
            'email' => 'predro_gonzalez@example.com',
            'local_phone' => '9854621',
            'mobile_phone' => '9995654823',
            'password' => Hash::make('admin12345'),
        ])->assignRole('client');

        User::create([
            'name' => 'Lorena',
            'last_name' => 'Garcia',
            'email' => 'lorena_garcia@example.com',
            'local_phone' => '9894621',
            'mobile_phone' => '9995687823',
            'password' => Hash::make('admin12345'),
        ])->assignRole('client');
    }
}
