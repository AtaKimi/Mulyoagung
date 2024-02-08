<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VillageLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('village_logo')->exists('')) {
            $directories = Storage::disk('village_logo')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('village_logo')->deleteDirectory($directories[$i]);
            }
        }

        $villages = Village::all();

        for ($i = 0; $i < count($villages); $i++) {
            $img_number = fake()->numberBetween(1, 1);
            $path = "assets/seeder/images/village_logo/" . $img_number . ".png";
            $villages[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'village_logo');
        }
    }
}
