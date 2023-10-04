<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programs;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Programs::create([
            'name' => "NEWS FLASH",
            'desc' => "Monday (10:00-11:00)",
            'start_hour' => 10,
            'end_hour' => 11,
            'broadcast_day' => 1,
            'img' => "images/programs/NF.webp"
        ]);

        Programs::create([
            'name' => "SERSAN",
            'desc' => "Monday (11:00-14:00)",
            'start_hour' => 11,
            'end_hour' => 14,
            'broadcast_day' => 1,
            'img' => "images/programs/SS.webp"
        ]);

        Programs::create([
            'name' => "SKOOB",
            'desc' => "Monday (14:00-17:00)",
            'start_hour' => 14,
            'end_hour' => 17,
            'broadcast_day' => 1,
            'img' => "images/programs/SKOOB.webp"
        ]);

        Programs::create([
            'name' => "MUSIKALITAS",
            'desc' => "Tuesday (11:00-14:00)",
            'start_hour' => 11,
            'end_hour' => 14,
            'broadcast_day' => 2,
            'img' => "images/programs/M.webp"
        ]);

        Programs::create([
            'name' => "CAMPUS TROOPS",
            'desc' => "Tuesday (15:00-17:00)",
            'start_hour' => 15,
            'end_hour' => 17,
            'broadcast_day' => 2,
            'img' => "images/programs/CT.webp"
        ]);

        Programs::create([
            'name' => "SODA",
            'desc' => "Wednesday (10:00-13:00)",
            'start_hour' => 10,
            'end_hour' => 13,
            'broadcast_day' => 3,
            'img' => "images/programs/SODA.webp"
        ]);

        Programs::create([
            'name' => "NEWS FLASH",
            'desc' => "Wednesday (13:00-14:00)",
            'start_hour' => 13,
            'end_hour' => 14,
            'broadcast_day' => 3,
            'img' => "images/programs/NF.webp"
        ]);

        Programs::create([
            'name' => "KAJJA",
            'desc' => "Wednesday (14:00-17:00)",
            'start_hour' => 14,
            'end_hour' => 17,
            'broadcast_day' => 3,
            'img' => "images/programs/K.webp"
        ]);

        Programs::create([
            'name' => "JERIT MALAM",
            'desc' => "Thursday (11:00-14:00)",
            'start_hour' => 11,
            'end_hour' => 14,
            'broadcast_day' => 4,
            'img' => "images/programs/JM.webp"
        ]);

        Programs::create([
            'name' => "CAMPUS TROOPS",
            'desc' => "Thursday (15:00-17:00)",
            'start_hour' => 15,
            'end_hour' => 17,
            'broadcast_day' => 4,
            'img' => "images/programs/CT.webp"
        ]);

        Programs::create([
            'name' => "BILCIN",
            'desc' => "Friday (10:00-13:00)",
            'start_hour' => 10,
            'end_hour' => 13,
            'broadcast_day' => 5,
            'img' => "images/programs/BC.webp"
        ]);

        Programs::create([
            'name' => "NEWS FLASH",
            'desc' => "Friday (13:00-14:00)",
            'start_hour' => 13,
            'end_hour' => 14,
            'broadcast_day' => 5,
            'img' => "images/programs/NF.webp"
        ]);

        Programs::create([
            'name' => "CHARTTOPPERS",
            'desc' => "Friday (14:00-17:00)",
            'start_hour' => 14,
            'end_hour' => 17,
            'broadcast_day' => 5,
            'img' => "images/programs/CT.webp"
        ]);

    }
}
