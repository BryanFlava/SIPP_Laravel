<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'admin' => '1',
                'password'  => bcrypt('123123123'),
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'admin' => '2',
                'password'  => bcrypt('123123123'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
