<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachHangThanThietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhachHangThanThiet', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('HoVaTen', 100);
			$table->string('DiaChi')->nullable();
			$table->string('SoDienThoai')->nullable();
			$table->string('Email');
			$table->integer('TrangThai'); //1 đã active 0 chưa active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KhachHangThanThiet');
    }
}
