<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\PublicService;
use Illuminate\Http\Request;

class PublicServiceController extends Controller
{
    public function index(){
        $service = PublicService::all();
        return view('pages.guests.public-services.index', compact('service'));
    }

    public function show(){
        $service = PublicService::where('id' , request('id'))->first();
        return view('pages.guests.public-services.show', compact('service'));
    }
}
