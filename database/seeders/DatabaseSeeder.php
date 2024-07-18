<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   
    public function run(): void
    {
        
        // $this->call([
        //     UsersTableSeeder::class,
        // ]);
        $this->call([
            RoleandPermissionSeeder::class,
        ]);
         $this->call([
            EmployeeSeeder::class,
        ]);
         $this->call([
            AdminSeeder::class,
        ]);
    }
}
