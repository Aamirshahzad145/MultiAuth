<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $User_data = [
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make('12345678'),
                "role" => "admin"
            ],

            [ 
                "name" => "employee", 
                "email" => "employee@gmail.com", 
                "password" => Hash::make('12345678'),
                "role" => "employee"
            ],

            [ 
                "name" => "user", 
                "email" => "user@gmail.com", 
                "password" => Hash::make('12345678'),
                "role" => "user"
            ],
        ];
    
        User::insert($User_data);
    }
}
