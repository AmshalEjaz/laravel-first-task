<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //  $route= $request->route()->getName();
    //  private $permissions = [
        
    //     'employee.employee' => 'access-employee',
    //     'employee.create' => 'add-employee',
    //     'employee.edit' => 'update-employee',
    //     'employee.update' => 'update-employee',
    //     'employee.show' => 'show-employee',
    //     'company.company' => 'access-company',
    //     'company.create' => 'add-company',
    //     'company.store' => 'add-company',
    //     'company.edit' => 'update-company',
    //     'company.update' => 'update-company',
    //     'company.destroy' => 'delete-company',
    //     // 'company.show' => 'show-company',
    // ];
   
   
    public function run(): void
    {
        //  $employeeRole = Role::firstOrCreate(['name' => 'employee']);
        //  $managerRole = Role::firstOrCreate(['name' => 'manager']);

        //    $managerUser = User::updateOrCreate(
        //     ['email' => 'manager@manager.com'],
        //     [
        //         'name' => 'Manager',
        //         'password' => Hash::make('password'), 
        //     ]
        
        // );
        // $managerUser->assignRole($managerRole);
        // $employeeUser = User::updateOrCreate(
        //     ['email' => 'admin@admin.com'],
        //     [
        //         'name' => 'Amshal',
        //         'password' => Hash::make('password'), 
        //     ]
        // );
        // $employeeUser->assignRole($employeeRole);

        

    }
}
