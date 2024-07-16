<?php

namespace Database\Seeders;

use App\Models\CongViec;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CongViecTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CongViec::factory(10)->create();
    }
}
