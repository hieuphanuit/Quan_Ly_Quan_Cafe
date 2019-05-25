<?php

namespace Modules\HoaDonNguyenLieu\Entities;

use Illuminate\Database\Eloquent\Model;

class HoaDonNguyenLieu extends Model
{
    protected $fillable = [ 
		'MaNhanVien',
		'TongTien',
    ];
	
	public $rules = [ 
		'MaNhanVien'=>'required',
		'TongTien'=>'required|numeric',
		
	];
	public $messages = [
		'MaNhanVien.required' => 'Mã nhân viên là trường bắt buộc',
		'TongTien.required' => 'Tổng tiền là trường bắt buộc'
	];
	
	protected $table = "HoaDonNguyenLieu";
}
