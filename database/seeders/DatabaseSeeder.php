<?php

namespace Database\Seeders;

use Database\Seeders\AdminUserSeeder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate([
            'name' => 'Leslie',
            'email' => 'leslieamadi9@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $this->call([
            AdminUserSeeder::class,
        ]);
    }
}
