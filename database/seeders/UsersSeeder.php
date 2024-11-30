<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin', 
                'email' => 'admin@example.com',
                'password' => Hash::make('senha_hashada_admin'), 
                'role' => 'admin',
            ],
            [
                'name' => 'Usuario1',
                'email' => 'usuario1@example.com',
                'password' => Hash::make('senha_hashada_user1'),
                'role' => 'user',
            ],
            [
                'name' => 'Usuario2',
                'email' => 'usuario2@example.com',
                'password' => Hash::make('senha_hashada_user2'),
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']],
                $user
            );
        }
    }
}