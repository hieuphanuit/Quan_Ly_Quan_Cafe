<?php

namespace Modules\KhachHangThanThiet\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
     protected $fillable = [
        'HoVaTen', 
		'DiaChi',
		'SoDienThoai',
		'Email',
		'TrangThai'
    ];
	
	public $rules = [
        'HoVaTen'=>'required', 
		'DiaChi'=>'required',
		'SoDienThoai'=>'required',
		'Email'=>'required',
		'TrangThai'=> 'required'
	];
	public $messages = [
		'HoVaTen.required' => 'Họ và tên là trường bắt buộc',
		'DiaChi.required' => 'Địa chỉ là trường bắt buộc',
		'SoDienThoai.required' => 'Số điện thoại là trường bắt buộc',
		'Email.required' => 'Email là trường bắt buộc',
		'TrangThai.required' => 'Trạng thái là trường bắt buộc',
	];
	
	protected $table = "KhachHangThanThiet";
}
