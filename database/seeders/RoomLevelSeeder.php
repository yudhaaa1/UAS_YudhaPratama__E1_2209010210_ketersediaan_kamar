<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomLevel;

class RoomLevelSeeder extends Seeder
{
    public function run()
    {
        RoomLevel::create(['level_name' => 'VIP', 'description' => 'Kamar dengan fasilitas premium']);
        RoomLevel::create(['level_name' => 'General', 'description' => 'Kamar standar']);
        RoomLevel::create(['level_name' => 'ICU', 'description' => 'Intensive Care Unit']);
    }
}
