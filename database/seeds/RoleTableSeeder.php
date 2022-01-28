<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

         Role::create([
        	'name'=>'Admin',
        	'guard_name'=>'web'
        ]);

        Role::create([
        	'name'=>'Staff',
        	'guard_name'=>'web'
        ]);

        $admin= User::create([
        'name'=>'admin',
        'email'=>'admin123@gmail.com',
        'password'=>Hash::make(123456789)
       ]);

         $staff= User::create([
        'name'=>'staff',
        'email'=>'staff123@gmail.com',
        'password'=>Hash::make(123456789)
       ]);


        $admin->assignRole('Admin');
        $staff->assignRole('Staff');
    }
}
