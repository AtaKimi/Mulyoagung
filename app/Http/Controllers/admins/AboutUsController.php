<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index() {
        $about_us = AboutUs::get()->first();
        return view('pages.admins.about-us.index', compact('about_us'));
    }

    public function edit() {
        $about_us = AboutUs::get()->first();
        return view('pages.admins.about-us.edit', compact('about_us'));
    }

    public function update() {
        $validated = request()->validate([
            'content' => 'required|string',
            'front_photo' =>'mimes:png,jpg,jpeg|max:1024',
        ]);

        $about_us = AboutUs::get()->first();

        $about_us->update($validated);

        if(request()->hasFile('front_photo')){
            $about_us->clearMediaCollection('default');
            $about_us->addMediaFromRequest('front_photo')->toMediaCollection('default', 'about_us_banner');
        }

        return back();
    }
}
