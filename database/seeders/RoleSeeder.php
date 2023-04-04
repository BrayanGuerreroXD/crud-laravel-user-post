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

        Permission::create(['name' => 'post.index']);
        Permission::create(['name' => 'publicador.post.create']);
        Permission::create(['name' => 'publicador.post.edit']);
        Permission::create(['name' => 'publicador.post.destroy']);

        Permission::create(['name' => 'admin.user.index']);
        Permission::create(['name' => 'admin.user.assign-role']);
    }
}