<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin Aplikasi',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'phone' =>'083874731480',
            'address' =>'Bogor',
            'is_active' =>1,
            'level_user' =>1,
        ]);
    }
}
