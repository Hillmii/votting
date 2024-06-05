<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Hilmi',
            'email' => 'hilmi@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'David',
            'email' => 'david@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Cahyo',
            'email' => 'cahyo@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Silo',
            'email' => 'silo@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
