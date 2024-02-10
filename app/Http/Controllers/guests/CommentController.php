<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\PublicService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function news(News $news){
        $validated = request()->validate([
            'content' => 'required|string',
        ]);

        $user = auth()->user();

        $validated['user_id'] = $user->id;

        $comment = $news->comments()->create($validated);

        return redirect()->back();
    }

    public function publicService(PublicService $public_service){
        $validated = request()->validate([
            'content' => 'required|string',
        ]);

        $user = auth()->user();

        $validated['user_id'] = $user->id;

        $comment = $public_service->comments()->create($validated);

        return redirect()->back();
    }
}
