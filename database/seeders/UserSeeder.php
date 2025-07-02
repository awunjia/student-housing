<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'fname' => 'Alice',
                'lname' => 'Tenant',
                'phone' => '0401234567',
                'role' => 'tenant',
                'email' => 'alice.tenant@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fname' => 'Bob',
                'lname' => 'Tenant',
                'phone' => '0407654321',
                'role' => 'tenant',
                'email' => 'bob.tenant@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fname' => 'Charlie',
                'lname' => 'Landlord',
                'phone' => '0412345678',
                'role' => 'landlord',
                'email' => 'charlie.landlord@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fname' => 'Diana',
                'lname' => 'Admin',
                'phone' => '0423456789',
                'role' => 'admin',
                'email' => 'diana.admin@example.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
