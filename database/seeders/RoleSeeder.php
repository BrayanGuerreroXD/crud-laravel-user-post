<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $Admin = Role::create(['name' => 'ADMIN']);
        $Publicador = Role::create(['name' => 'PUBLICADOR']);
        $Visitante = Role::create(['name' => 'VISITANTE']);

        Permission::create(['name' => 'create-post']); // solo para el rol "publicador"
        Permission::create(['name' => 'edit-post']); // solo para el rol "publicador"
        Permission::create(['name' => 'delete-post']); // solo para el rol "publicador"
        Permission::create(['name' => 'assign-role']); // solo para el rol "admin"
    }
}