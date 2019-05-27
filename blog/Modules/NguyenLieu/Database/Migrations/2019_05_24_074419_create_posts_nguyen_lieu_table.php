<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsNguyenLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NguyenLieu', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('TenNguyenLieu', 100);
			$table->integer('GiaUocLuong');
			$table->string('DonViTinh',100);
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
        Schema::dropIfExists('NguyenLieu');
    }
}
