<?php

namespace Modules\NguyenLieu\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
     protected $fillable = [
        'TenNguyenLieu', 
		'GiaUocLuong',
    ];
	
	public $rules = [
        'TenNguyenLieu'=>'required', 
		'GiaUocLuong'=>'required|numeric'	
	];
	public $messages = [
		'TenNguyenLieu.required' => 'Tên nguyên liệu là trường bắt buộc',
		'GiaUocLuong.required' => 'Giá ước lượng là trường bắt buộc',
	];
	
	protected $table = "NguyenLieu";
}
