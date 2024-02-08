<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::paginate(5);
        return view('pages.admins.facility.index', compact('facilities'));
    }

    public function update(Facility $facility)
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'front_photo' => 'mimes:png,jpg,jpeg|max:1024',
        ]);


        $facility->update($validated);

        if (request()->hasFile('front_photo')) {
            $facility->clearMediaCollection('default');
            $facility->addMediaFromRequest('front_photo')->toMediaCollection('default', 'news_front_image');
        }

        return redirect()->route('admin-facility-index');
    }

    public function create()
    {
        return view('pages.admins.facility.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'front_photo' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);

        $facilty = Facility::create($validated);

        $facilty->addMediaFromRequest('front_photo')->toMediaCollection('default', 'facility_front_image');


        return redirect()->route('admin-facility-index');
    }

    public function edit(Facility $facility)
    {
        return view('pages.admins.facility.edit', compact('facility'));
    }

    public function destroy(Facility $facility)
    {
        $facility->delete();
        return redirect()->route('admin-facility-index');
    }
}
