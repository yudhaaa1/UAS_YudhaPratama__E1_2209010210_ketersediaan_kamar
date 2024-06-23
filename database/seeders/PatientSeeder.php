<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        Patient::create(['name' => 'Alaska Tahta Wardana', 'date_of_birth' => '1996-12-16', 'address' => 'Jln Pegangsaan Timur', 'phone_number' => '081234567890', 'email' => 'alaska@gmail.com']);
        Patient::create(['name' => 'Alana Juanda', 'date_of_birth' => '1998-12-16', 'address' => 'Jln Sutomo No 15', 'phone_number' => '081324560987', 'email' => 'alana@yahoo.com']);
    }
}
