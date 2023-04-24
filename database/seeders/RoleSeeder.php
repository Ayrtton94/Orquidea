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
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'Administrador']);
        $role2 = Role::create(['name'=>'Editor']);
        $role3 = Role::create(['name'=>'Usuario']);

        Permission::Create(['name'=>'home'])->syncRoles([$role1, $role2, $role3]);

        Permission::Create(['name'=>'users.index'])->syncRoles([$role1]);
        Permission::Create(['name'=>'users.create'])->syncRoles([$role1]);
        Permission::Create(['name'=>'users.edit'])->syncRoles([$role1]);
        Permission::Create(['name'=>'users.destroy'])->syncRoles([$role1]);

        Permission::Create(['name'=>'area.index'])->syncRoles([$role1]);
        Permission::Create(['name'=>'area.create'])->syncRoles([$role1]);
        Permission::Create(['name'=>'area.edit'])->syncRoles([$role1]);
        Permission::Create(['name'=>'area.destroy'])->syncRoles([$role1]);
    }
}
