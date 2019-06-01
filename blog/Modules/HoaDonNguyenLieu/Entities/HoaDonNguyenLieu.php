<?php

namespace Modules\HoaDonNguyenLieu\Entities;
use Modules\ChiTietHoaDonNguyenLieu\Entities\ChiTietHoaDonNguyenLieu;

use Illuminate\Database\Eloquent\Model;

class HoaDonNguyenLieu extends Model
{
    protected $fillable = [ 
		'MaNhanVien',
		'TongTien',
    ];
	
	public $rules = [ 
		
	];
	public $messages = [

	];
	
	protected $table = "HoaDonNguyenLieu";

	public function ChiTietHoaDonNguyenLieu(){
		return $this->hasMany(ChiTietHoaDonNguyenLieu::class, 'MaHoaDonNguyenLieu');
	}
}
