<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => "admin@gmail.com",
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => '1',

            ],
            //instructor
            [
                'name' => 'Instructor',
                'username' => 'instructor',
                'email' => "instructor@gmail.com",
                'password' => Hash::make('111'),
                'role' => 'instructor',
                'status' => '1',

            ],
            //user
            [
                'name' => 'User',
                'username' => 'user',
                'email' => "user@gmail.com",
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => '1',

            ],
        ]);
        DB::table('smtpSetting')->insert([
            'id' => '1',
            'mailer' => 'user@gmail.com',
            'host' => 'hello@gmail.com',
            'port' => '25',
            'username' => 'hello@gmail.com',
            'password' => 'hello@gmail.com',
            'encryption' => 'hello@gmail.com',
            'from_address' => 'hello@gmail.com',
        ]);
    }
    
}
