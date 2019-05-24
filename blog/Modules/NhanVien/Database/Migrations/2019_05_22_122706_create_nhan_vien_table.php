<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('Role', 16);
			$table->string('HoVaTen', 100);
			$table->string('HinhAnh', 50);
			$table->string('GioiTinh', 50)->nullable();
			$table->string('DiaChi')->nullable();
			$table->string('SoDienThoai')->nullable();
			$table->string('CMND')->nullable(); //1 nam 2 nu 3 khac
			$table->string('Email');
			$table->string('MatKhau')->nullable();
			$table->string('LuongTheoGio')->nullable();
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
        Schema::dropIfExists('NhanVien');
    }
}
