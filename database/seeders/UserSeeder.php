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
            'birthdate' => strtotime('1 January 2002'),
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
            'birthdate' => strtotime('1 January 2002'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio11_users')->insert([
            'username' => 'Nonahiya',
            'name' => 'Enrico Almer',
            'email' => 'enrico@keld2021.com',
            'password' => Hash::make('12345678'),
            'school' => 'Universitas Ciputra',
            'city' => 'Grissee',
            'birthdate' => strtotime('9 January 2002'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio11_users')->insert([
            'username' => 'Luam',
            'name' => 'Dhava Rachmana',
            'email' => 'dhava@keld2021.com',
            'password' => Hash::make('12345678'),
            'school' => 'Universitas Ciputra',
            'city' => 'Darjo',
            'birthdate' => strtotime('25 March 2002'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio11_users')->insert([
            'username' => 'Chips',
            'name' => 'Lanovia Liem',
            'email' => 'lanovia@keld2021.com',
            'password' => Hash::make('12345678'),
            'school' => 'Universitas Ciputra',
            'city' => 'Surabaya',
            'birthdate' => strtotime('21 May 2002'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio11_users')->insert([
            'username' => 'Willl',
            'name' => 'Kevin William',
            'email' => 'kevin@keld2021.com',
            'password' => Hash::make('12345678'),
            'school' => 'Universitas Ciputra',
            'city' => 'Samarinda',
            'birthdate' => strtotime('29 November 2002'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
