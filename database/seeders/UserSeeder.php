<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bio11_users')->insert([
            'username' => 'Admin',
            'name' => 'KELD Administrator',
            'email' => 'admin@keld2021.com',
            'password' => Hash::make('KELD_Admin'),
            'school' => 'Universitas Ciputra',
            'city' => 'Surabaya',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio11_users')->insert([
            'username' => 'User',
            'name' => 'Awanama',
            'email' => 'user@keld2021.com',
            'password' => Hash::make('12345678'),
            'school' => 'Lorem Ipsum High School',
            'city' => 'Dolor City',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
