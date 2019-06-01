<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsChiTietHoaDonNguyenLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDonNguyenLieu', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('MaNguyenLieu');
			$table->integer('SoLuong');
			$table->integer('MaHoaDonNguyenLieu');
			$table->integer('DonGia');
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
        Schema::dropIfExists('ChiTietHoaDonNguyenLieu');
    }
}
