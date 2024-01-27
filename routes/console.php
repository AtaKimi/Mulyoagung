<?php

use App\Models\User;
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
    $admin_role = Role::create(['name' => 'admin']);
    $role = Role::where('name', '=', 'admin')->get();
    dd($role);
})->purpose('Display an inspiring quote');
