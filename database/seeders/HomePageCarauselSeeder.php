<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomePageCarauselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('home_page_carausel_image')->exists('')) {
            $directories = Storage::disk('home_page_carausel_image')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('home_page_carausel_image')->deleteDirectory($directories[$i]);
            }
        }

        $village = Village::get();

        for ($i = 0; $i < count($village); $i++) {
            $img_number = fake()->numberBetween(1, 7);
            $path = "assets/seeder/images/home_page_carausel_image/" . $img_number . ".jpg";
            $village[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'home_page_carausel_image');
        }
    }
}
