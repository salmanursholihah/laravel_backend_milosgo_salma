<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'super_admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Seller One',
                'email' => 'seller1@example.com',
                'password' => Hash::make('password'),
                'role' => 'seller',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Seller Two',
                'email' => 'seller2@example.com',
                'password' => Hash::make('password'),
                'role' => 'seller',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User One',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User Two',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
