<?php

namespace App\Http\Controllers\admins;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\News;
use App\Models\PublicService;

class DashboardController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        $news_count = News::count();
        $facilities_count = Facility::count();
        $public_services_count = PublicService::count();
        return view('pages.admins.dashboard', compact('users_count', 'news_count', 'facilities_count', 'public_services_count'));
    }
}
