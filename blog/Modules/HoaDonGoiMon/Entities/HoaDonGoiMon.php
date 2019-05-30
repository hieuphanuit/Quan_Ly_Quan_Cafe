<?php

namespace Modules\HoaDonGoiMon\Entities;

use Illuminate\Database\Eloquent\Model;

class HoaDonGoiMon extends Model
{
     protected $fillable = [ 
		'MaKhachHang',
		'MaNhanVien',
		'TongTien',
    ];
	
	public $rules = [
		'MaKhachHang'=>'required',
		'MaNhanVien'=>'required',
		'TongTien'=>'required|numeric'		
	];
	public $messages = [
		'MaKhachHang.required' => 'Mã khách hàng là trường bắt buộc',
		'MaNhanVien.required' => 'Mã nhân viên là trường bắt buộc',
		'TongTien.required' => 'Tổng tiền là trường bắt buộc'
	];
	
	protected $table = "HoaDonGoiMon";
}