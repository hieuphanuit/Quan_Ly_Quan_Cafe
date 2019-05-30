<?php

namespace Modules\NguyenLieu\Entities;

use Illuminate\Database\Eloquent\Model;

class NguyenLieu extends Model
{
    protected $fillable = [
        'TenNguyenLieu', 
		'GiaUocLuong',
		'SoLuongTon',
		'DonViTinh'
    ];
	
	public $rules = [
        'TenNguyenLieu'=>'required', 
		'GiaUocLuong'=>'required|numeric',
		'SoLuongTon'=>'required|numeric',
		'DonViTinh'=>'required'
	];
	public $messages = [
		'TenNguyenLieu.required' => 'Tên nguyên liệu là trường bắt buộc',
		'GiaUocLuong.required' => 'Giá ước lượng là trường bắt buộc',
		'SoLuongTon.required' => 'Số lượng tồn là trường bắt buộc',
		'DonViTinh.required' => 'Đơn vị tính là trường bắt buộc',
	];
	
	protected $table = "NguyenLieu";

	public function kho(){
		return $this->hasOne('Modules\Kho\Entities\Kho', 'MaNguyenLieu');
	}
}
