<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Facility;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $data = [
            [
                "name" => "System Administator",
                "email" => "admin@mediqu.com",
                "role" => "admin",
                "is_admin" => 1,
                "age" => "23",
                "gender" => "male",
                "facility" => "999",
                "bio" => "This is just me",
                "phone" => "0192938481",
                "password" => "11223344"
            ],
            [
                "name" => "System Doctor",
                "email" => "doctor@mediqu.com",
                "role" => "doctor",
                "is_admin" => 0,
                "age" => "23",
                "gender" => "male",
                "facility" => "999",
                "bio" => "This is just me",
                "phone" => "0192938481",
                "password" => "11223344"
            ],
            [
                "name" => "System Secretary",
                "email" => "secretary@mediqu.com",
                "role" => "secretary",
                "age" => "23",
                "is_admin" => 0,
                "gender" => "male",
                "facility" => "999",
                "bio" => "This is just me",
                "phone" => "0192938481",
                "password" => "11223344"
            ],
            
        ];
          

        foreach($data as $dt){
            User::factory()->create([
                "name" => $dt['name'],
                "email" => $dt['email'],
                "role" => $dt['role'],
                "age" => $dt['age'],
                "gender" => $dt['gender'],
                "facility" => $dt['facility'],
                "bio" => $dt['bio'],
                "is_admin" => $dt['is_admin'],
                "phone" => $dt['phone'],
                "password" => $dt['password'],
            ]);
        }

        Facility::factory()->create([
            'id' => '999',
            'fc_name' => "Ufanisi Strategies",
            'fc_desc' => "This is the main hub",
            'fc_phone' => "0712345678",
            'fc_email' => "info@ufanisistrageies.com",
            'fc_status' => 1
        ]);
    }
}
