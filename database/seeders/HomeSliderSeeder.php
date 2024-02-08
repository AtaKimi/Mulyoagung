<?php

namespace Database\Seeders;

use App\Models\HomeSlider;
use App\Models\PublicService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeSlider::factory(4)->create();
    }
}
