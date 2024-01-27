<?php

namespace Database\Seeders;

use App\Models\PublicService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublicServiceFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('public_service_file')->exists('')) {
            $directories = Storage::disk('public_service_file')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('public_service_file')->deleteDirectory($directories[$i]);
            }
        }

        $public_service = PublicService::get();

        for ($i = 0; $i < count($public_service); $i++) {
            $img_number = fake()->numberBetween(1, 5);
            $path = "assets/seeder/files/public_service_file/" . $img_number . ".pdf";
            $public_service[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'public_service_file');
        }
    }
}
