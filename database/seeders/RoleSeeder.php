<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'    => config('role.id.admin'),
                'name' => 'admin',
            ],
            [
                'id'    => config('role.id.user'),
                'name' => 'user',
            ],
            [
                'id'    => config('role.id.banned'),
                'name' => 'banned',
            ],
        ];

        \Schema::disableForeignKeyConstraints();
        Role::truncate();
        \Schema::enableForeignKeyConstraints();
        Role::insert($roles);
    }
}
