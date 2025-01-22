<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsUser::create([
            'name' => 'Admin',
            'email' => 'test2@test',
            'password' => Hash::make('purworejo'),
            'role' => 'admin',
        ]);
        ModelsUser::create([
            'name' => 'Admin2',
            'email' => 'test@test',
            'password' => Hash::make('purworejo'),
            'role' => 'admin',
        ]);
    }
}
