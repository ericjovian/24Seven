<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'winson',
                'email' => 'winson@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'isUserSubscribed' => 1,
                'user_role_id' => 2,
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'wardana',
                'email' => 'wardana@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'isUserSubscribed' => 0,
                'user_role_id' => 3,
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'kenis',
                'email' => 'kenis@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'isUserSubscribed' => 0,
                'user_role_id' => 1,
                'remember_token' => Str::random(10),
            ]
        ];

        foreach ($admins as $key => $value) {
            $user = User::create($value);
        }

       

    }
}