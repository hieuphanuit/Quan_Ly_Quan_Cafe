<?php

use Illuminate\Database\Seeder;

class KhachHangThanThietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('KhachHangThanThiet')->insert([
                'HoVaTen' => $faker->name,
                'Email' => $faker->unique()->email,
                'SoDienThoai' => $faker->phoneNumber,
                'DiaChi' => $faker->address
            ]);
        }
    }
}
