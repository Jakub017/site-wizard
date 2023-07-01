<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

    \App\Models\User::factory()->create([
        'name' => 'Jakub Lipiński',
        'email' => 'kontakt@lipinskijakub.pl',
        'password' => bcrypt('Ntep3Q4GaC53FWy'),
        'email_verified_at' => now(),
        'remember_token' => \Illuminate\Support\Str::random(10),
     ]);
     \App\Models\User::factory(4)->create();

}
}