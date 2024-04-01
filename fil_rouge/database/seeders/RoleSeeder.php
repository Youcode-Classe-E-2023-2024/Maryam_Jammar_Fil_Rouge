<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $roleAdmin = Role::firstOrCreate(['role' => 'admin']);
        $roleOrganizer = Role::firstOrCreate(['role' => 'organizer']);
        $roleClient = Role::firstOrCreate(['role' => 'client']);

    }
}
