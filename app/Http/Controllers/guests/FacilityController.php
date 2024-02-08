<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(){
        $facilities = Facility::paginate(4);
        return view('pages.guests.facilities.index', compact('facilities'));
    }

    public function show(Facility $facility){
        return view('pages.guests.facilities.show', compact('facility'));
    }
}
