<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@jobportal.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);

        // Create regular user
        User::create([
            'name' => 'Test User',
            'email' => 'user@jobportal.com',
            'password' => Hash::make('user1234'),
            'role' => 'user',
            'email_verified_at' => now()
        ]);
    }
}