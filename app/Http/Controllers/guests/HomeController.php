<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\News;
use App\Models\PublicService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $news = News::latest()->take(4)->get();
        $facilities = Facility::latest()->take(3)->get();
        $publicServices = PublicService::latest()->take(3)->get();


        return view('pages.guests.home', compact('news', 'facilities', 'publicServices'));
    }
}
