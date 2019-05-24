<?php

namespace Modules\ChiTietHoaDonGoiMon\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    protected $fillable = [
        'MaMon', 
		'SoLuong',
		'DonGia',
    ];
	
	public $rules = [
        'MaMon'=>'required', 
		'SoLuong'=>'required|numeric',
		'DonGia'=>'required|numeric'		
	];
	public $messages = [
		'MaMon.required' => 'Mã món là trường bắt buộc',
		'SoLuong.required' => 'Số lượng là trường bắt buộc',
		'DonGia.required' => 'Đơn giá là trường bắt buộc'
	];
	
	protected $table = "ChiTietHoaDonGoiMon";
}
