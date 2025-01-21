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
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        $this->call([
            documents::class,
            downloadables::class,
            menus::class,
            beritas::class,
            galleries::class,
            gambars::class,
            komentars::class,
            playlists::class,
            videos::class,
        ]);
    }
}
