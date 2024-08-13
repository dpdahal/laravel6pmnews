<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin002'),
                'gender' => 'male',
                'role' => 'admin',
                'image' => '',
            ],
            [
                'name' => 'sophia',
                'email' => 'sophia@gmail.conm',
                'password' => bcrypt('sophia002'),
                'gender' => 'female',
                'role' => 'user',
                'image' => '',
            ],
            [
                'name' => 'hari',
                'email' => 'hari@gmail.com',
                'password' => bcrypt('hari002'),
                'gender' => 'male',
                'role' => 'user',
                'image' => '',
            ],
        ];

        foreach ($users as $user) {
            $email = $user['email'];
            $userExist = User::where('email', '=', $email)->first();
            if (!$userExist) {
                User::create($user);
            }
        }
    }
}
