<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ada Admin',
                'email' => 'admin@example.com',
                'password' => 'admin123',
                'role' => 'administrador',
            ],
            [
                'name' => 'Luis Lider',
                'email' => 'lider@example.com',
                'password' => 'lider123',
                'role' => 'lider',
            ],
            [
                'name' => 'Ana Aprendiz',
                'email' => 'aprendiz@example.com',
                'password' => 'aprendiz123',
                'role' => 'aprendiz',
            ],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => Hash::make($data['password']),
                    'role' => $data['role'],
                    'email_verified_at' => now(),
                ],
            );
        }
    }
}
