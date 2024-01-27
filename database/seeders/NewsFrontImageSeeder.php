<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\News;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsFrontImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('news_front_image')->exists('')) {
            $directories = Storage::disk('news_front_image')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('news_front_image')->deleteDirectory($directories[$i]);
            }
        }

        $news = News::get();

        for ($i = 0; $i < count($news); $i++) {
            $img_number = fake()->numberBetween(1, 7);
            $path = "assets/seeder/images/news_front_image/" . $img_number . ".jpg";
            $news[$i]->addMedia(public_path($path))->preservingOriginal()
                ->toMediaCollection('default', 'news_front_image');
        }
    }
}
