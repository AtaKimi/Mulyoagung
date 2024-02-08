<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutUsBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('about_us_banner')->exists('')) {
            $directories = Storage::disk('about_us_banner')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('about_us_banner')->deleteDirectory($directories[$i]);
            }
        }

        $about_us = AboutUs::get();

        for ($i = 0; $i < count($about_us); $i++) {
            $img_number = fake()->numberBetween(1, 7);
            $path = "assets/seeder/images/about_us_banner/" . $img_number . ".jpg";
            $about_us[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'about_us_banner');
        }
    }
}
