<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicServiceController extends Controller
{
    public function index(){
        return view('pages.guests.public-services.index');
    }

    public function show(){
        return view('pages.guests.public-services.show');
    }
}
