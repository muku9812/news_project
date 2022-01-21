<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'id'=>'1',
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('admin123'),
            'phone' =>'9808726271',
            'address' => 'Old Baneshwor ',
            'status' => '1',


        ]);
        User::create([
            'id'=>'1',
            'name' => 'Mukesh',
            'email' => 'mukesh123@gmail.com',
            'password' => Hash::make('mukesh123'),
            'phone' =>'9814944280',
            'address' => 'Jhapa ',
            'status' => '1',


        ]);

    }
}
