<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CkEditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('ckeditor')->exists('')) {
            $directories = Storage::disk('ckeditor')->allDirectories();
            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('ckeditor')->deleteDirectory($directories[$i]);
            }
        }
    }
}
