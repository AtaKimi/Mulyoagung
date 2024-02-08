<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                //normal seeder
                RoleSeeder::class,
                AdminSeeder::class,
                UserSeeder::class,
                VillageSeeder::class,
                AboutUsSeeder::class,
                NewsSeeder::class,
                FacilitySeeder::class,
                PublicServiceSeeder::class,
                SocialMediaSeeder::class,
                CommentSeeder::class,
                HomeSliderSeeder::class,

                //media seeder
                VillageLogoSeeder::class,
                AboutUsBannerSeeder::class,
                NewsFrontImageSeeder::class,
                FacilityFrontImageSeeder::class,
                PublicServiceFrontImageSeeder::class,
                PublicServiceFileSeeder::class,
                SocialMediaLogoSeeder::class,
                UserPhotoProfileSeeder::class,
                HomeSliderImageSeeder::class,
                ]
        );
    }
}
