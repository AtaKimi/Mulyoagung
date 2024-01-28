<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('pages.guests.news.index' , compact('news')); ;
    }

    public function show(){
        $news = News::where('id' , request('id'))->first();
        return view('pages.guests.news.show' , compact('news'));
    }
}
