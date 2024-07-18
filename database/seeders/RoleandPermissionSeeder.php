<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleandPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'update employee']);
        Permission::create(['name' => 'show employee']);
        Permission::create(['name' => 'destroy employee']);
        Permission::create(['name' => 'create employee']);
       

        Permission::create(['name' => 'access company']);
        Permission::create(['name' => 'show company']);
        Permission::create(['name' => 'update company']);
        Permission::create(['name' => 'edit company']);
        Permission::create(['name' => 'destroy company']);
        Permission::create(['name' => 'create company']);
       

    

        
    }
}
