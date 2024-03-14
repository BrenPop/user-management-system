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
        /** Seed user data */
        $this->call(UserSeeder::class);

        /** Seed language data */
        $this->call(LanguageSeeder::class);

        /** Seed interest data */
        $this->call(InterestSeeder::class);
    }
}
