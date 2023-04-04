<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'password' => 'admin'
        ])->assignRole('ADMIN');

        User::create([
            'name' => 'Publisher User',
            'email' => 'publisher@email.com',
            'password' => 'publisher'
        ])->assignRole('PUBLICADOR');

        User::create([
            'name' => 'Visitor User',
            'email' => 'visitor@email.com',
            'password' => 'visitor'
        ])->assignRole('VISITANTE');

        User::factory(9)->create();
    }
}