<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsChiTietHoaDonTable extends Migration
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
			$table->string('MaNguyenLieu', 16);
			$table->string('SoLuong', 16);
			$table->string('DonGia', 100);
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
