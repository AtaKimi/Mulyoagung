<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\SocialMedia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialMediaLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('social_media_logo')->exists('')) {
            $directories = Storage::disk('social_media_logo')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('social_media_logo')->deleteDirectory($directories[$i]);
            }
        }

        $social_media = SocialMedia::get();

        for ($i = 0; $i < count($social_media); $i++) {
            $img_number = fake()->numberBetween(1, 5);
            $path = "assets/seeder/images/social_media_logo/" . $img_number . ".svg";
            $social_media[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'social_media_logo');
        }
    }
}
