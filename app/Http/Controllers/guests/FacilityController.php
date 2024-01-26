<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(){
        return view('pages.guests.facilities.index');
    }

    public function show() {
        return view('pages.guests.facilities.show');
    }
}
