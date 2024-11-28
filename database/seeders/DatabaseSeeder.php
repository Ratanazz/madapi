<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        User::factory()->create([
            'name'=> 'Raneth',
            'description'=> 'Im a user',
            'profile_image' => 'https://i.pinimg.com/236x/a8/4a/a3/a84aa310f33862e53c30f55bdf94b013.jpg', // Replace with actual path
            'email' => 'raneth@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // Replace with a strong password
            'remember_token' => Str::random(10),
            
        ]);
    }
}
