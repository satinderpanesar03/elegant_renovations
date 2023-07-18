<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::truncate();
        Setting::create([
            'address' => 'demo address',
            'email' => 'test@email.com',
            'country_code' => '00',
            'phone_number' => '0000000000'
        ]);
    }
}
