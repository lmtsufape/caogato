<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'name',
            'role' => 'ROLE_ADMIN',
        ]);
        DB::table('roles')->insert([
            'name' => 'name',
            'role' => 'ROLE_MANAGER',
        ]);
        DB::table('roles')->insert([
            'name' => 'name',
            'role' => 'ROLE_USER',
        ]);
    }
}
