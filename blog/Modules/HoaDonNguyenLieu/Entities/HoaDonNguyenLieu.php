<?php

namespace Modules\HoaDonNguyenLieu\Entities;
use Modules\ChiTietHoaDonNguyenLieu\Entities\ChiTietHoaDonNguyenLieu;
use Modules\NhanVien\Entities\NhanVien;
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
	public function NhanVien(){
		return $this->belongsTo(NhanVien::class, 'MaNhanVien');
	}
}
