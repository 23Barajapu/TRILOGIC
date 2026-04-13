<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat akun admin
        User::create([
            'name' => 'Admin Ekky',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Password: admin123
        ]);

        // Membuat akun admin alternatif
        User::create([
            'name' => 'System Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'), // Password: admin123
        ]);

        $this->command->info('Admin accounts created successfully!');
        $this->command->info('Email: admin@gmail.com | Password: admin123');
        $this->command->info('Email: admin@admin.com | Password: admin123');
    }
}
