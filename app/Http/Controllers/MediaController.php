<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function ckeditor()
    {
        $village = Village::get()->first();
        if (request()->hasFile('upload')) {
            request()->validate([
                'upload' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $media = $village->addMediaFromRequest('upload')->toMediaCollection('ckeditor', 'ckeditor');
            return response()->json(['fileName' => $media->file_name, 'uploaded' => 1, 'url' => $media->getUrl()]);
        }
    }
}
