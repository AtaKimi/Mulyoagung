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
        $admin = User::factory()->create(
            ['email' => 'admin@admin.com']
        );
        $admin->assignRole($admin_role);

        $super_admin_role = Role::where('name', '=', 'super_admin')->get();
        $super_admin = User::factory()->create(
            ['email' => 'superadmin@superadmin.com']
        );
        $super_admin->assignRole($super_admin_role);
    }
}
