<?php

namespace Database\Seeders;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    
    public function run(): void
    {
        Role::create(["name"=> "pustakawan"]);
        Permission::create(["name"=>"edit_user"]);
        Role::create(["name"=> "mahasiswa"]);
        Permission::create(["name"=>"view_book"]);
    }
}
