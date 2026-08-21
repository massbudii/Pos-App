<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data user admin

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('gagak321'),
            'role' => 'admin',
        ]);

        // Data User Kasir

        User::create([
            'name' => 'Kasir 1',
            'email' => 'kasir1@gmail.com',
            'password' => Hash::make('gagak321'),
            'role' => 'kasir',
        ]);

        //  Data user owner

        User::create([
            'name' => 'Kevin Sanjaya',
            'email' => 'owner1@gmail.com',
            'password' => Hash::make('Kevin Sanjaya'),
            'role' => 'owner',
        ]);
    }
}
