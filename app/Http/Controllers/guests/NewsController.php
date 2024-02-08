<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(4);
        return view('pages.guests.news.index' , compact('news')); ;
    }

    public function show(News $news){
        return view('pages.guests.news.show' , compact('news'));
    }
}
