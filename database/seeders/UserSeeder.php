<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plainPassword = 'password';
        $users = [];

        // Membuat 1 user Admin
        $users[] = [
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => $plainPassword,
            'user_type' => 'admin',
            'image' => 'profile/profile.jpg',
        ];

        // Membuat 6 user dengan peran Chef
        for ($i = 1; $i <= 6; $i++) {
            $users[] = [
                'name' => 'Chef ' . $i,
                'email' => 'chef' . $i . '@example.com',
                'password' => $plainPassword,
                'user_type' => 'staff',
                'image' => 'profile/profile.jpg',
            ];
        }

        // Membuat 2 user dengan peran Cashier
        for ($i = 1; $i <= 2; $i++) {
            $users[] = [
                'name' => 'Cashier ' . $i,
                'email' => 'cashier' . $i . '@example.com',
                'password' => $plainPassword,
                'user_type' => 'staff',
                'image' => 'profile/profile.jpg',
            ];
        }

        // Membuat 2 user dengan peran Waiter
        for ($i = 1; $i <= 2; $i++) {
            $users[] = [
                'name' => 'Waiter ' . $i,
                'email' => 'waiter' . $i . '@example.com',
                'password' => $plainPassword,
                'user_type' => 'staff',
                'image' => 'profile/profile.jpg',
            ];
        }

        // Membuat 10 user Customer
        for ($i = 1; $i <= 10; $i++) {
            $users[] = [
                'name' => 'Customer ' . $i,
                'email' => 'customer' . $i . '@example.com',
                'password' => $plainPassword,
                'user_type' => 'customer',
                'image' => 'profile/profile.jpg',
            ];
        }

        foreach ($users as &$user) {
            $user['password'] = Hash::make($user['password']);

            User::create($user);
        }
    }
}
