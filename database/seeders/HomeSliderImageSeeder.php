<?php

namespace Database\Seeders;

use App\Models\HomeSlider;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSliderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('home_slider_image')->exists('')) {
            $directories = Storage::disk('home_slider_image')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('home_slider_image')->deleteDirectory($directories[$i]);
            }
        }

        $home_slider = HomeSlider::get();

        for ($i = 0; $i < count($home_slider); $i++) {
            $img_number = fake()->numberBetween(1, 7);
            $path = "assets/seeder/images/home_slider_image/" . $img_number . ".jpg";
            $home_slider[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'home_slider_image');
        }
    }
}
