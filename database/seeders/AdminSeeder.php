<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Role::firstOrCreate(['name' => 'admin'])->givePermissionTo(Permission::all());
        $companyRole = Role::firstOrCreate(['name' => 'admin']);
        $companyPermissions = [
            'access company',
            'create company',
            'show company',
            'update company',
            'destroy company',
            'destroy employee',
            'create employee',
            'show employee',
            'update employee',
        ];
        $companyRole->syncPermissions($companyPermissions);
        $user= User::create([
             'name' => 'Admin',
            'email' => 'admin@example.com',
            'phone' => 123456,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            
        ]);
        $user->assignRole('admin');
    }
}
