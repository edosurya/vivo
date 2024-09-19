<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Superadmin',
            'email' => 'eourta.edo@gmail.com',
            'password' => bcrypt('xPQfOoOj9bV9jeb'),
            'email_verified_at' => now(),
            'type' => User::SUPERADMIN
        ]);
    }
}
