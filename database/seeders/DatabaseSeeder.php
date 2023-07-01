<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     PermissionsTableSeeder::class,
        //     RolesTableSeeder::class,
        //     PermissionRoleTableSeeder::class,
        //     UsersTableSeeder::class,
        //     RoleUserTableSeeder::class,
        // ]);

        User::factory(5)->has(
            Task::factory(10)
        )->create();
    }
}
