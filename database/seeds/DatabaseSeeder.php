<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
            'image'=>'img-01.png',
            'bomon'=>'CNPM',
            'level'=>'1',

        ]);
        DB::table('users')->insert([
            'name'=>'User1',
            'email'=>'infor1@gmail.com',
            'password'=>bcrypt('12345678'),
            'image'=>'img-01.png',
            'bomon'=>'CNPM',
        ]);
        DB::table('infor_faculty')->insert([
            'name'=>'CNTT',
            'email'=>'fit@hnue.edu',
            'image'=>'img-01.png',
            'phone'=>'12345678',
        ]);
    }
}
