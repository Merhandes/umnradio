<?php

namespace Database\Seeders;

use App\Models\Roledef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoledefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Roledef::create([
            'name' => 'superadmin'
        ]);
        Roledef::create([
            'name' => 'admin'
        ]);
        Roledef::create([
            'name' => 'bendahara'
        ]);
        Roledef::create([
            'name' => 'news'
        ]);
        Roledef::create([
            'name' => 'ultimacrews'
        ]);
    }
}
