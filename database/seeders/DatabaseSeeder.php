<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PublicService;
use App\Models\SocialMedia;
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
            ]
        );
    }
}
