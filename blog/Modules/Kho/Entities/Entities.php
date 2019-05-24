<?php

namespace Modules\Kho\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
	protected $fillable = [
        'MaNguyenLieu', 
		'SoLuongTon'
    ];
	
	public $rules = [
        'MaNguyenLieu'=>'required', 
		'SoLuongTon'=>'required|numeric'
	];
	public $messages = [
		'MaNguyenLieu.required' => 'Mã nguyên liệu là trường bắt buộc',
		'SoLuongTon.required' => 'Số lượng tồn là trường bắt buộc'
	];
	
	protected $table = "Kho";
}
