<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(
            [
                //normal seeder
                RoleSeeder::class,
                AdminSeeder::class,
                AboutUsSeeder::class,
                VillageSeeder::class,
                //media seeder
                CkEditorSeeder::class,
                VillageLogoSeeder::class,
                UserPhotoProfileSeeder::class,
            ]
        );
    }
}
