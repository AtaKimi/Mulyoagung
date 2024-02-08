<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\PublicService;
use Illuminate\Http\Request;

class PublicServiceController extends Controller
{
    public function index(){
        $publicServices = PublicService::paginate(4);
        return view('pages.guests.public-services.index', compact('publicServices'));
    }

    public function show(PublicService $publicService){
        return view('pages.guests.public-services.show', compact('publicService'));
    }
}
