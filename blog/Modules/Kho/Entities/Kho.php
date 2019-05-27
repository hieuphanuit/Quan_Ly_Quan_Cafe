<?php

namespace Modules\Kho\Entities;

use Illuminate\Database\Eloquent\Model;

class Kho extends Model
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

	public function nguyenLieu(){
		return $this->belongTo('Modules\NguyenLieu\Entities\NguyenLieu', 'MaNguyenLieu');
	}
}
