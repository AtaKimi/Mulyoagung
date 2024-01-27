<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_role = Role::where('name', '=', 'admin')->get();
        $user = User::factory()->create(
            ['email' => 'admin@admin.com']
        );
        $user->assignRole($admin_role);
    }
}
