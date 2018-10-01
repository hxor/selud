<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role' => 'admin', 'title' => 'Administrator'],
            ['role' => 'user', 'title' => 'User'],
        ];

        Role::insert($roles);

        $users = [
            ['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@mail.com', 'role_id' => 1, 'password' => bcrypt('password')],
            ['name' => 'User', 'username' => 'user', 'email' => 'user@mail.com', 'role_id' => 2, 'password' => bcrypt('password')],
        ];

         User::insert($users);
    }
}
