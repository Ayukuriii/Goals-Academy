<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating User Roles
        $userRole = Role::create(['name' => 'user']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $tutorRole = Role::create(['name' => 'tutor']);
        $adminRole = Role::create(['name' => 'admin']);

        // Creating Permissions
        $userPermission = Permission::create(['name' => 'as User']);
        $moderatorPermission = Permission::create(['name' => 'as Moderator']);
        $tutorPermission = Permission::create(['name' => 'as Tutor']);

        // Assign Roles to Permissions
        $userRole->givePermissionTo($userRole);
        $moderatorRole->givePermissionTo($moderatorPermission);
        $tutorRole->givePermissionTo($tutorPermission);

        // Assign Admin to All Permissions
        $adminRole->givePermissionTo([
            $userPermission,
            $moderatorPermission,
            $tutorPermission,
        ]);
    }
}
