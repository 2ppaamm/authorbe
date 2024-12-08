<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'firstname' => 'Pamela',
            'lastname'=> 'Lim',
            'email' => 'pam@ebiz.institute',
            'Organization'=>'Ebiz Institute',
            'Country'=>'Singapore',
            'password' => Hash::make('password'), // Default password
        ]);
    }
}
