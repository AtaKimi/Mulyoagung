<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\PublicService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublicServiceFrontImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('public_service_front_image')->exists('')) {
            $directories = Storage::disk('public_service_front_image')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('public_service_front_image')->deleteDirectory($directories[$i]);
            }
        }

        $public_service = PublicService::get();

        for ($i = 0; $i < count($public_service); $i++) {
            $img_number = fake()->numberBetween(1, 7);
            $path = "assets/seeder/images/public_service_front_image/" . $img_number . ".jpg";
            $public_service[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'public_service_front_image');
        }
    }
}
