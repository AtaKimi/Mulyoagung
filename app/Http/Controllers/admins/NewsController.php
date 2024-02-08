<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(5);
        return view('pages.admins.news.index', compact('news'));
    }

    public function create()
    {
        return view('pages.admins.news.create');
    }

    public function edit(News $news)
    {
        return view('pages.admins.news.edit', compact('news'));
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'content' => 'required|string',
            'front_photo' => 'required|mimes:png,jpg,jpeg|max:1024',

        ]);
        $user = request()->user();
        $validated['user_id'] = $user->id;
        $news = News::create($validated);

        $news->addMediaFromRequest('front_photo')->toMediaCollection('default', 'news_front_image');

        return redirect()->route('admin-news-index');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin-news-index');
    }

    public function update(News $news)
    {
        $validated = request()->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'content' => 'required|string',
            'front_photo' => 'mimes:png,jpg,jpeg|max:1024',
        ]);

        $news->update($validated);

        if (request()->hasFile('front_photo')) {
            $news->clearMediaCollection('default');
            $news->addMediaFromRequest('front_photo')->toMediaCollection('default', 'news_front_image');
        }

        return redirect()->route('admin-news-index');
    }
}
