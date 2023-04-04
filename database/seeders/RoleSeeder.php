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

        // Create permissions
        $PostIndex =  Permission::create(['name' => 'post.index']);

        $UserEdit = Permission::create(['name' => 'user.edit']);

        $PublisherPostCreate = Permission::create(['name' => 'publisher.post.create']);
        $PublisherPostEdit = Permission::create(['name' => 'publisher.post.edit']);
        $PublisherPostDestroy = Permission::create(['name' => 'publisher.post.destroy']);

        $AdminUserIndex = Permission::create(['name' => 'admin.user.index']);
        $AdminUserCreate = Permission::create(['name' => 'admin.user.create']);
        $AdminUserDestroy = Permission::create(['name' => 'admin.user.destroy']);
        $AdminUserAssignRole = Permission::create(['name' => 'admin.user.assign-role']);

        // Assign permissions to roles
        $PostIndex->syncRoles([$Admin, $Publisher, $Visitor]);
        $UserEdit->syncRoles([$Admin, $Publisher, $Visitor]);

        $PublisherPostCreate->syncRoles([$Publisher]);
        $PublisherPostEdit->syncRoles([$Publisher]);
        $PublisherPostDestroy->syncRoles([$Publisher]);

        $AdminUserIndex->syncRoles([$Admin]);
        $AdminUserCreate->syncRoles([$Admin]);
        $AdminUserDestroy->syncRoles([$Admin]);
        $AdminUserAssignRole->syncRoles([$Admin]);
    }
}