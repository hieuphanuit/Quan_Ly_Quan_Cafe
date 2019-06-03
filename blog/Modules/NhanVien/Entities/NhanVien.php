<?php

namespace Modules\NhanVien\Entities;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
	protected $fillable = [
		'Role',
        'HoVaTen',  
		'GioiTinh', 
		'DiaChi',
		'SoDienThoai',
		'CMND',
		'Email',
		'password',
		'LuongTheoGio',
		'TrangThai'
    ];
	
	public $rules = [
		'Role'=>'required',
        'HoVaTen'=>'required', 
		'GioiTinh'=>'required', 
		'DiaChi'=>'required',
		'SoDienThoai'=>'required',
		'CMND'=>'required',
		'Email'=>'required|email',
		'password'=>'required',
		'LuongTheoGio'=> 'required|numeric',
		'TrangThai'=> 'required'
	];
	public $messages = [
		'Role.required' => 'Role là trường bắt buộc',
		'HoVaTen.required' => 'Họ và tên là trường bắt buộc',
		'DiaChi.required' => 'Địa chỉ là trường bắt buộc',
		'SoDienThoai.required' => 'Số điện thoại là trường bắt buộc',
		'CMND.required' => 'CMND là trường bắt buộc',
		'Email.required' => 'Email là trường bắt buộc',
		'password.required' => 'Mật khẩu là trường bắt buộc',
		'LuongTheoGio.required' => 'Lương là trường bắt buộc',
		'TrangThai.required' => 'Trạng thái là trường bắt buộc',
	];
	
	protected $table = "users";
}
