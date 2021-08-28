<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        if($users->isEmpty()) {
            $defaultUsers = [
                [
                    'id' => 1,
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                    'remember_token' => null,
                    'role_id' => config('role.id.admin'),
                ],
            ];

            User::insert($defaultUsers);
        }
    }
}
