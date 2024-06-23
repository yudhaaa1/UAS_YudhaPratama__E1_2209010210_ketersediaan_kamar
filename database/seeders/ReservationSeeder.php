<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Patient;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        $room1 = Room::where('room_number', 'VVIP-1101')->first();
        $room2 = Room::where('room_number', 'VVIP-1701')->first();
        $patient1 = Patient::where('name', 'Alaska Tahta Wardana')->first();
        $patient2 = Patient::where('name', 'Alana Juanda')->first();
    }
}