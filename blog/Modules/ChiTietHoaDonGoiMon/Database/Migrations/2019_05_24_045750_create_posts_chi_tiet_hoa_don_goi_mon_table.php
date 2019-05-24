<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsChiTietHoaDonGoiMonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDonGoiMon', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('MaMon', 16);
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
        Schema::dropIfExists('ChiTietHoaDonGoiMon');
    }
}
