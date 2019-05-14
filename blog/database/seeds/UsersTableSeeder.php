<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'HoVaTen' => 'Quản lý',
            'Email' => 'quanly@gmail.com',
            'Role' => 'QuanLy',
            'password' => bcrypt('123456'),
        ]);
    }
}
