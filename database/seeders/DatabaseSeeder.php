<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Programs;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '1077UMNRadio',
            'nim' => '0',
            'phone' => '0',
            'address' => 'none',
            'birthdate' => '2000-01-01',
            'major' => 'none',
            'year' => 'none',
            'remember_token' => 'admin'
        ]);

        

        $this->call(ProgramsSeeder::class);
        $this->call(RoledefSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
