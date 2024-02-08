<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use App\Models\Village;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('pages.admins.setting.profile', compact('user'));
    }

    public function profilePhoto()
    {
        $user = auth()->user();
        if (request()->hasFile('photo_profile')) {
            $validated = request()->validate([
                'photo_profile' => 'required|mimes:png,jpg,jpeg|max:1024',
            ]);

            $user->clearMediaCollection('default');
            $user->addMediaFromRequest('photo_profile')->toMediaCollection('default', 'user_photo_profile');
        }

        return redirect()->back();
    }

    public function changePassword(){
        $user = auth()->user();

        $validated = request()->validate([
            'new_password' => 'required|string|min:8',
            'password' => 'required|string|confirmed|min:8'
        ]);
        
        $user->update($validated);
        dd($user);
        return redirect()->back();
    }

    public function profileIdentity()
    {
        $user = auth()->user();

        if (request('email') != $user->email) {
            $validated = request()->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255|email'
            ]);
        } else {
            $validated = request()->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255|email|unique:users,email'
            ]);
        }

        $user->update($validated);

        return redirect()->back();
    }

    public function village()
    {
        $village = Village::get()->first();
        $home_sliders = HomeSlider::get();
        return view('pages.admins.setting.village', compact('village', 'home_sliders'));
    }

    public function villagePhoto()
    {
        $village = Village::get()->first();
        if (request()->hasFile('village_logo')) {
            $validated = request()->validate([
                'village_logo' => 'required|mimes:png,jpg,jpeg|max:1024',
            ]);

            $village->clearMediaCollection('default');
            $village->addMediaFromRequest('village_logo')->toMediaCollection('default', 'village_logo');
        }

        return redirect()->back();
    }

    public function villageIdentity(){
        $validated = request()->validate([
            'email'  => 'required|email',
            'phone_number' => 'required|numeric',
            'address' => 'required|string',
            'short_profile' => 'required|string'
        ]);

        $village = Village::get()->first();

        $village->update($validated);

        return redirect()->back();
    }

    public function villageHomeSliderStore(){
        if (request()->hasFile('home_slider')) {
            $validated = request()->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'required|string|max:255',
                'home_slider' => 'required|mimes:png,jpg,jpeg|max:1024',
            ]);

            $home_slider = HomeSlider::create($validated);

            $home_slider->addMediaFromRequest('home_slider')->toMediaCollection('default', 'home_slider_image');
        }
        return redirect()->back();
    }

    public function villageHomeSliderDestroy(HomeSlider $home_slider){
        if($home_slider->getMedia()){
            $home_slider->clearMediaCollection('default');
        }

        $home_slider->delete();

        return redirect()->back();
    }
}
