<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\PublicService;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PublicServiceController extends Controller
{
    public function index()
    {
        $public_services = PublicService::paginate(5);
        return view('pages.admins.public-service.index', compact('public_services'));
    }

    public function create()
    {
        return view('pages.admins.public-service.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'front_photo' => 'required|mimes:png,jpg,jpeg|max:1024',

        ]);

        $public_service = PublicService::create($validated);

        $public_service->addMediaFromRequest('front_photo')->toMediaCollection('default', 'public_service_front_image');

        return redirect()->route('admin-public-service-edit', $public_service);
    }

    public function edit(PublicService $public_service)
    {
        return view('pages.admins.public-service.edit', compact('public_service'));
    }

    public function update(PublicService $public_service)
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'front_photo' => 'mimes:png,jpg,jpeg|max:1024',
        ]);

        $public_service->update($validated);

        if (request()->hasFile('front_photo')) {
            $public_service->clearMediaCollection('default');
            $public_service->addMediaFromRequest('front_photo')->toMediaCollection('default', 'public_service_front_image');
        }
        return redirect()->route('admin-public-service-index');
    }

    public function destroy(PublicService $public_service)
    {
        $public_service->delete();

        return redirect()->route('admin-public-service-index');
    }

    public function fileStore(PublicService $public_service)
    {
        $validated = request()->validate([
            'file' => 'required|mimes:png,jpg,pdf,docs,doc,xls'
        ]);

        $public_service->addMediaFromRequest('file')->toMediaCollection('files', 'public_service_file');

        return redirect()->back();
    }

    public function fileDestroy(PublicService $public_service, Media $media){
        if($media->model_type == 'App\Models\PublicService' && $media->model_id == $public_service->id){
            $media->delete();
        }

        return redirect()->back();
    }
}
