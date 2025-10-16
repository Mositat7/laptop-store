<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use App\Models\User;
use App\Models\LoginPhone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // کاربر ادمین
        $admin = User::create([
            'name' => 'مدیر',
            'family' => 'سیستم',
            'email' => 'admin@digistar.com',
            'phone' => '09123456789',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        // کاربر فروشنده
        $seller = User::create([
            'name' => 'فروشنده',
            'family' => 'تست',
            'email' => 'seller@digistar.com',
            'phone' => '09129876543',
            'password' => Hash::make('123456'),
            'role' => 'seller',
            'is_active' => true,
        ]);

        // کاربر معمولی
        $user = User::create([
            'name' => 'کاربر',
            'family' => 'تست',
            'email' => 'user@digistar.com',
            'phone' => '09127654321',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'is_active' => true,
            'address' => 'تهران، خیابان ولیعصر، پلاک ۱۲۳',
        ]);

        // نمونه OTP برای تست
        LoginPhone::create([
            'phone_number' => '09127654321',
            'otp_code' => '123456',
            'is_verified' => true,
        ]);

        // کاربران فیک
        User::factory(10)->create();
    }
}
