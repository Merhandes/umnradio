<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create([
            'user_id' => 1,
            'username' => 'admin',
            'role' => '1'
        ]);
        Role::create([
            'user_id' => 1,
            'username' => 'admin',
            'role' => '2'
        ]);
        Role::create([
            'user_id' => 1,
            'username' => 'admin',
            'role' => '3'
        ]);
        Role::create([
            'user_id' => 1,
            'username' => 'admin',
            'role' => '4'
        ]);
        Role::create([
            'user_id' => 1,
            'username' => 'admin',
            'role' => '5'
        ]);
    }
}
