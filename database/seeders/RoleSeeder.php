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
        $Publisher = Role::create(['name' => 'PUBLICADOR']);
        $Visitor = Role::create(['name' => 'VISITANTE']);

        $PostIndex =  Permission::create(['name' => 'post.index']);

        $PublisherPostCreate = Permission::create(['name' => 'publisher.post.create']);
        $PublisherPostEdit = Permission::create(['name' => 'publisher.post.edit']);
        $PublisherPostDestroy = Permission::create(['name' => 'publisher.post.destroy']);

        $AdminUserIndex = Permission::create(['name' => 'admin.user.index']);
        $AdminUserAssignRole = Permission::create(['name' => 'admin.user.assign-role']);

        $PostIndex->syncRoles([$Admin, $Publisher, $Visitor]);

        $PublisherPostCreate->syncRoles([$Publisher]);
        $PublisherPostEdit->syncRoles([$Publisher]);
        $PublisherPostDestroy->syncRoles([$Publisher]);

        $AdminUserIndex->syncRoles([$Admin]);
        $AdminUserAssignRole->syncRoles([$Admin]);
    }
}