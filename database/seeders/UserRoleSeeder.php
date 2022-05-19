<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'User', 'Professional'];

        for ($i = 0; $i < 3; $i++) {
            UserRole::create([
                'role' => $roles[$i]
            ]);
        }
    }
}