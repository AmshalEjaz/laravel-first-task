<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
         $this->call(RoleandPermissionSeeder::class);

        $employeeRole = Role::firstOrCreate(['name' => 'employee']);
        $employeeRole->syncPermissions(['update employee', 'show employee']);

        $user= User::create([
             'name' => 'employee',
            'email' => 'employee@gmail.com',
            'phone' => 123456,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
             
            
        ]);
        $user->assignRole($user->role);
        $user->assignRole('employee');
    }
}
