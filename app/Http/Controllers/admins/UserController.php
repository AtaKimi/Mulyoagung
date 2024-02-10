<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('pages.admins.user.index', compact('users'));
    }

    public function store()
    {
        $validated = request()->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email|string|unique:users,email',
                'password' => 'required|min:8|confirmed',
                'role' => 'required|integer'
            ]
        );

        $user = User::create($validated);

        if ($validated['role'] == 2) {
            $admin_role = Role::where('name', '=', 'admin')->first();
            $user->assignRole($admin_role);
        } else if ($validated['role'] == 3) {
            $super_admin_role = Role::where('name', '=', 'super_admin')->first();
            $user->assignRole($super_admin_role);
        }

        return redirect()->back();
    }

    public function update(User $user)
    {
        $validated = request()->validate([
            'role' => 'required|integer'
        ]);

        if ($user->hasRole('super_admin')) {
            return redirect()->back();
        }

        if ($validated['role'] == 1) {
            if ($user->hasRole('admin')) {
                $admin_role = Role::where('name', '=', 'admin')->first();
                $user->removeRole($admin_role);
            }
        } else if ($validated['role'] == 2) {
            $admin_role = Role::where('name', '=', 'admin')->first();
            $user->syncRoles($admin_role);
        }

        return redirect()->back();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back();
    }
}
