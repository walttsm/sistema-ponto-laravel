<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
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
                'email' => 'admin@test.com',
                'is_admin' => '1',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'User',
                'email' => 'user@test.com',
                'is_admin' => '0',
                'password' => bcrypt('user'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
