<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class komentars extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komentars')->insert([
            [
                'username' => 'user1',
                'email' => 'user1@example.com',
                'context' => 'This is a comment from user1.',
                'date' => now(),
                'berita_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'user2',
                'email' => 'user2@example.com',
                'context' => 'This is a comment from user2.',
                'date' => now(),
                'berita_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'user3',
                'email' => 'user3@example.com',
                'context' => 'This is a comment from user3.',
                'date' => now(),
                'berita_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
