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
                'id'    => 1,
                'name' => 'admin',
            ],
            [
                'id'    => 2,
                'name' => 'user',
            ],
        ];

        \Schema::disableForeignKeyConstraints();
        Role::truncate();
        \Schema::enableForeignKeyConstraints();
        Role::insert($roles);
    }
}
