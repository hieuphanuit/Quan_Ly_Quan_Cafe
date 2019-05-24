<?php

namespace Modules\ChiTietHoaDon\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    protected $fillable = [
        'MaNguyenLieu', 
		'SoLuong',
		'DonGia'
    ];
	
	public $rules = [
        'MaNguyenLieu'=>'required', 
		'SoLuong'=>'required|numeric',
		'DonGia'=>'required|numeric'		
	];
	public $messages = [
		'MaNguyenLieu.required' => 'Mã nguyên liệu là trường bắt buộc',
		'SoLuong.required' => 'Số lượng là trường bắt buộc',
		'DonGia.required' => 'Đơn giá là trường bắt buộc'
	];
	
	protected $table = "ChiTietHoaDonNguyenLieu";
}
