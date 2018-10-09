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
            ['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@mail.com', 'role_id' => 1, 'bumd_id' => null, 'password' => bcrypt('password')],
            ['name' => 'User PDAM', 'username' => 'pdam', 'email' => 'pdam@mail.com', 'role_id' => 2, 'bumd_id' => 1, 'password' => bcrypt('password')],
            ['name' => 'User PDBPR', 'username' => 'pdbpr', 'email' => 'pdbpr@mail.com', 'role_id' => 2, 'bumd_id' => 2, 'password' => bcrypt('password')],
            ['name' => 'User PDPB', 'username' => 'pdpb', 'email' => 'pdpb@mail.com', 'role_id' => 2, 'bumd_id' => 3, 'password' => bcrypt('password')],
            ['name' => 'User PDP', 'username' => 'pdp', 'email' => 'pdp@mail.com', 'role_id' => 2, 'bumd_id' => 4, 'password' => bcrypt('password')],
            ['name' => 'User PDFC', 'username' => 'pdfc', 'email' => 'pdfc@mail.com', 'role_id' => 2, 'bumd_id' => 5, 'password' => bcrypt('password')],
        ];

         User::insert($users);
    }
}
