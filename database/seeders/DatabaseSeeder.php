<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $user = User::factory()->create([
             'full_name' => 'Admin ganteng',
             'username'=> 'Admin',
             'email' => 'Admin@gmail.com',
             'phone' => '299829389',
         ]);
         $role =Role::create(['name' => 'Admin']);
            $user->assignRole($role);
    }
}
