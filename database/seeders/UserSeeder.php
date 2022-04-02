<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        User::create([
            'name' => "Ahsan",
            'email' => "abc@gmail.com",
            'email_verified_at' => now(),
            'password' => "123456", // password
            'role' => "admin",
            'remember_token' => Str::random(10),
            "profile_photo_path" => "public/images/profile/IBhKQbFZJQZyTMNnKamyYIH6cgEHCqNOSFynLqCN.jpg",
        ]);

        User::create([
            'name' => "Super Admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("12345678"), // password
            'role' => "admin",
            "profile_photo_path" => "public/images/profile/IBhKQbFZJQZyTMNnKamyYIH6cgEHCqNOSFynLqCN.jpg",
        ]);
    }
}
