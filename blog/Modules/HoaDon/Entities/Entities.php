<?php

namespace Modules\HoaDon\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    protected $fillable = [
        'MaCTNL', 
		'MaNhanVien',
		'TongTien',
    ];
	
	public $rules = [
        'MaCTNL'=>'required', 
		'MaNhanVien'=>'required',
		'TongTien'=>'required|numeric',
		
	];
	public $messages = [
		'MaCTNL.required' => 'Mã chi tiết hóa đơn nguyên liệu là trường bắt buộc',
		'MaNhanVien.required' => 'Mã nhân viên là trường bắt buộc',
		'TongTien.required' => 'Tổng tiền là trường bắt buộc'
	];
	
	protected $table = "HoaDonNguyenLieu";
}
