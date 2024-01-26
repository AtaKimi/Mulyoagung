<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('pages.guests.news.index');
    }

    public function show(){
        return view('pages.guests.news.show');
    }
}
