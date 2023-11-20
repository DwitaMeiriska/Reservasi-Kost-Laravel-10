<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=[
            [
                'name'      =>  'admin',
                'email'     =>  'admin@gmail.com',
                'role'      =>  'admin',
                'password'  =>  bcrypt('12345678')
            ],
            [
                'name'      =>  'Riska',
                'email'     =>  'riska@gmail.com',
                'role'      =>  'user',
                'password'  =>  bcrypt('12345678')
            ],
            [
                'name'      =>  'user',
                'email'     =>  'user@gmail.com',
                'role'      =>  'user',
                'password'  =>  bcrypt('12345678')
            ],
            ];

            foreach($user as $key => $val){
                User::updateOrCreate($val );
            }
    }
}
