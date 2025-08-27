<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Super Admin
        User::create([
            'name' => 'Akmal Raditya Wijaya',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);

        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 20 Kategori Pengaduan
        $categories = [
            'Infrastruktur Jalan', 'Air Bersih', 'Sampah dan Lingkungan',
            'Penerangan Jalan', 'Keamanan dan Ketertiban', 'Kesehatan',
            'Pendidikan', 'Transportasi', 'Pertanian', 'Peternakan',
            'Pariwisata', 'Ekonomi dan UMKM', 'Kependudukan',
            'Administrasi Pemerintahan', 'Bencana Alam', 'Kebersihan',
            'Energi dan Listrik', 'Kesejahteraan Sosial', 'Perizinan',
            'Lainnya'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
