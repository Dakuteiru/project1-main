<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //раздача привелегий
        Permission::firstOrCreate(["name"=> "admin.*"]);

        Role::firstOrCreate(["name"=>"admin"])->givePermissionTo("admin.*");

        User::firstOrCreate(
            [
                'email'=>'admin@localhost.com'
            ]
            ,
            [
                'name'=> 'admin',
                'password' => Hash::make('12345678'),
            ]
        )
        
        ->assignRole('admin');
    }
}
