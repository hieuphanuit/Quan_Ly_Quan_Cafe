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
			[
				'HoVaTen' => 'Nguyễn Văn A',
				'Email' => 'quanly@gmail.com',
				'Role' => 'QuanLy',
				'password' => bcrypt('123456'),
			],
			[
				'HoVaTen' => 'Trần Văn B',
				'Email' => 'thungan@gmail.com',
				'Role' => 'ThuNgan',
				'password' => bcrypt('123456'),
			],
        ]);
		
    }
}
