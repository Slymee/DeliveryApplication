<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [
               'username' => 'superadmin',
               'email' => 'superadmin@example.com',
               'password' => bcrypt('superadmin'),
               'address' => 'Keytahiti, 19, Kathmandu, Kathmandu',
               'is_admin' => 1,
           ],

            [
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
                'address' => 'Keytahiti, 19, Kathmandu, Kathmandu',
                'is_admin' => 1,
            ],

            [
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => bcrypt('user'),
                'address' => 'Keytahiti, 19, Kathmandu, Kathmandu',
                'is_admin' => 0,
            ],
        ]);
    }
}
