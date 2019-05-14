<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Role');
            $table->string('HoVaTen')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->string('GioiTinh')->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('SoDienThoai')->nullable();
            $table->string('CMND')->nullable();
            $table->string('Email')->unique();
            $table->string('LuongTheoGio')->nullable();
            $table->string('TrangThai')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
