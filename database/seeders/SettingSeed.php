<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = Setting::firstOrCreate(['key' => 'aq'], ['value' => 100]);
        $setting = Setting::firstOrCreate(['key' => 'co'], ['value' => 100]);
        $setting = Setting::firstOrCreate(['key' => 'smoke'], ['value' => 100]);
        $setting = Setting::firstOrCreate(['key' => 'carbon'], ['value' => 100]);
    }
}
