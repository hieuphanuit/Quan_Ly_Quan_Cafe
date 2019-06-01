<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachHangThanThietDeleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhachHangThanThietDelete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('MaKhachHang');
			$table->string('HoVaTen', 100);
			$table->string('DiaChi')->nullable();
			$table->string('SoDienThoai')->nullable();
			$table->string('Email');
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
        Schema::dropIfExists('KhachHangThanThietDelete');
    }
}
