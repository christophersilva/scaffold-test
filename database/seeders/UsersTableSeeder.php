<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Professor',
                'email' => 'prof@mail.com',
                'password' => Hash::make('123123123'),
                'kind' => 'teacher',
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}