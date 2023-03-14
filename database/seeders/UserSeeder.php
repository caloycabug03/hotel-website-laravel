<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        //
      

        DB::table('users')->insert([
            'name' =>'Front desk Department',
            'email' =>'frontdesk'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'Manager Department ',
            'email' =>'manager'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'School Accountant',
            'email' =>'schoolaccountant'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'Housekeeping Department',
            'email' =>'housekeeping'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'Rodinel Bergado',
            'email' =>'rodinelbergado'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
