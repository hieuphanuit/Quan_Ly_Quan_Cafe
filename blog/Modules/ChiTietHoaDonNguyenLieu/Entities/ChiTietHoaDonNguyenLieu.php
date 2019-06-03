<?php

namespace Modules\ChiTietHoaDonNguyenLieu\Entities;
use Modules\NguyenLieu\Entities\NguyenLieu;
use Illuminate\Database\Eloquent\Model;
use Modules\NhanVien\Entities\NhanVien;

class ChiTietHoaDonNguyenLieu extends Model
{
    protected $fillable = [
		'MaHoaDonNguyenLieu',
        'MaNguyenLieu', 
		'SoLuong',
		'DonGia'
    ];
	public $rules = [
		'MaHoaDonNguyenLieu'=>'required', 
        'MaNguyenLieu'=>'required', 
		'SoLuong'=>'required|numeric',
		'DonGia'=>'required|numeric'		
	];
	public $messages = [
		'MaHoaDonNguyenLieu.required' => 'Mã nguyên liệu là trường bắt buộc',
		'MaNguyenLieu.required' => 'Mã nguyên liệu là trường bắt buộc',
		'SoLuong.required' => 'Số lượng là trường bắt buộc',
		'DonGia.required' => 'Đơn giá là trường bắt buộc'
	];
	
	protected $table = "ChiTietHoaDonNguyenLieu";

	public function HoaDonNguyenLieu(){
		return $this->belongsTo(HoaDonNguyenLieu::class, 'MaHoaDonNguyenLieu');
	}
	public function NguyenLieu(){
		return $this->belongsTo(NguyenLieu::class, 'MaNguyenLieu');
	}
}
