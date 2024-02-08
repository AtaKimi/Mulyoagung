<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $about_us = AboutUs::get()->first();
        return view('pages.guests.about-us', compact('about_us'));
    }
}
