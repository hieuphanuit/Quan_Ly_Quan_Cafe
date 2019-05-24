<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsHoaDonGoiMonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDonGoiMon', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('MaCTHD', 16);
			$table->string('MaKhachHang', 16);
			$table->string('MaNhanVien', 16);
			$table->string('TongTien', 100);
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
        Schema::dropIfExists('HoaDonGoiMon');
    }
}
