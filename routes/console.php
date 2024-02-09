<?php

use Carbon\Carbon;
use App\Models\News;
use App\Models\User;
use App\Models\Facility;
use App\Models\HomeSlider;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $news = News::get()->first();
    dd($news->created_at->format('F d, Y'));

})->purpose('Display an inspiring quote');
