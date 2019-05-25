<?php

namespace Modules\ChiTietHoaDonGoiMon\Entities;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonGoiMon extends Model
{
    protected $fillable = [
		'MaHoaDonGoiMon',
        'MaMon', 
		'SoLuong',
		'DonGia',
    ];
	
	public $rules = [
		'MaHoaDonGoiMon'=>'required',
        'MaMon'=>'required', 
		'SoLuong'=>'required|numeric',
		'DonGia'=>'required|numeric'		
	];
	public $messages = [
		'MaHoaDonGoiMon.required' => 'Mã hóa đơn gọi món là trường bắt buộc',
		'MaMon.required' => 'Mã món là trường bắt buộc',
		'SoLuong.required' => 'Số lượng là trường bắt buộc',
		'DonGia.required' => 'Đơn giá là trường bắt buộc'
	];
	
	protected $table = "ChiTietHoaDonGoiMon";
}
