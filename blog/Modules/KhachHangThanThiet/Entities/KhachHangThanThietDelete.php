<?php

namespace Modules\KhachHangThanThiet\Entities;

use Illuminate\Database\Eloquent\Model;

class KhachHangThanThietDelete extends Model
{
    protected $fillable = [
        'MaKhachHang',
        'HoVaTen', 
		'DiaChi',
		'SoDienThoai',
		'Email',
    ];
	protected $table = "KhachHangThanThietDelete";
}
