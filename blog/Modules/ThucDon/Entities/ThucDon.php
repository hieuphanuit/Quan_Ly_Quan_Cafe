<?php

namespace Modules\ThucDon\Entities;

use Illuminate\Database\Eloquent\Model;

class ThucDon extends Model
{
    protected $fillable = [
        'TenMon', 
		'DonGia'
    ];
	
	public $rules = [
        'TenMon'=>'required', 
		'DonGia'=>'required|numeric'
	];
	public $messages = [
		'TenMon.required' => 'Tên món là trường bắt buộc',
		'DonGia.required' => 'Đơn giá là trường bắt buộc'
	];
	
	protected $table = "ThucDon";
}
