<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create
        ([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456')
        ]);
        User::create
        ([
            'name'=>'beautisian',
            'email'=>'buahd@gmail.com',
            'password'=>bcrypt('123456')
        ]);
    }
}