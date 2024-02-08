<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilityFrontImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('facility_front_image')->exists('')) {
            $directories = Storage::disk('facility_front_image')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('facility_front_image')->deleteDirectory($directories[$i]);
            }
        }

        $facilities = Facility::get();

        for ($i = 0; $i < count($facilities); $i++) {
            $img_number = fake()->numberBetween(1, 7);
            $path = "assets/seeder/images/facility_front_image/" . $img_number . ".jpg";
            $facilities[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'facility_front_image');
        }
    }
}
