<?php

namespace Modules\HoaDonGoiMon\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    protected $fillable = [
        'MaCTHD', 
		'MaKhachHang',
		'MaNhanVien',
		'TongTien',
    ];
	
	public $rules = [
        'MaCTHD'=>'required', 
		'MaKhachHang'=>'required',
		'MaNhanVien'=>'required',
		'TongTien'=>'required|numeric'		
	];
	public $messages = [
		'MaCTHD.required' => 'Mã nguyên liệu là trường bắt buộc',
		'MaKhachHang.required' => 'Mã khách hàng là trường bắt buộc',
		'MaNhanVien.required' => 'Mã nhân viên là trường bắt buộc',
		'TongTien.required' => 'Tổng tiền là trường bắt buộc'
	];
	
	protected $table = "HoaDonGoiMon";
}
