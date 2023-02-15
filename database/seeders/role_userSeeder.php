<?php

namespace Database\Seeders;

use App\Models\Role_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class role_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $role_user = [
        ["role_id" => "1",  "user_id" => "1", "user_type"=>"App\Models\User"],
        ["role_id" => "2", "user_id" => "2" , "user_type"=>"App\Models\User"],
        ["role_id" => "3", "user_id" => "3" , "user_type"=>"App\Models\User"],
    ];

    Role_user::insert($role_user);

    }
}
