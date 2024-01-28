<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(){
        $facilities = Facility::all();
        return view('pages.guests.facilities.index', compact('facilities'));
    }

    public function show() {
        $facilities = Facility::where('id' , request('id'))->first();
        return view('pages.guests.facilities.show', compact('facilities'));
    }
}
