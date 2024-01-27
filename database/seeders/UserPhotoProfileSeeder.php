<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserPhotoProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('user_photo_profile')->exists('')) {
            $directories = Storage::disk('user_photo_profile')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('user_photo_profile')->deleteDirectory($directories[$i]);
            }
        }

        $users = User::get();

        for ($i = 0; $i < count($users); $i++) {
            $img_number = fake()->numberBetween(1, 5);
            $path = "assets/seeder/images/user_photo_profile/" . $img_number . ".jpg";
            $users[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'user_photo_profile');
        }
    }
}
