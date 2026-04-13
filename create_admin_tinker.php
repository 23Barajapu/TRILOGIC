<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

echo "Creating admin accounts...\n";

try {
    // Hapus admin yang sudah ada (jika ada)
    User::where('email', 'admin@gmail.com')->delete();
    User::where('email', 'admin@admin.com')->delete();
    
    // Membuat akun admin pertama
    $admin1 = User::create([
        'name' => 'Admin Ekky',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin123'),
    ]);

    // Membuat akun admin kedua
    $admin2 = User::create([
        'name' => 'System Administrator',
        'email' => 'admin@admin.com',
        'password' => Hash::make('admin123'),
    ]);

    echo "Admin accounts created successfully!\n\n";
    echo "Admin Account 1:\n";
    echo "Email: admin@ekkyrefleksi.com\n";
    echo "Password: admin123\n\n";
    echo "Admin Account 2:\n";
    echo "Email: admin@admin.com\n";
    echo "Password: admin123\n\n";
    echo "Gunakan salah satu akun ini untuk login sebagai admin.\n";
    echo "Setelah login, Anda akan diarahkan ke admin dashboard.\n\n";
    echo "Jika masih redirect ke index, pastikan email yang digunakan sesuai dengan salah satu dari dua email di atas.\n";

} catch (Exception $e) {
    echo "Error creating admin accounts: " . $e->getMessage() . "\n";
}
