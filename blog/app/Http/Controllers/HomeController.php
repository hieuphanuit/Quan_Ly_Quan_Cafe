<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\HoaDonGoiMon\Entities\HoaDonGoiMon;
use Modules\HoaDonNguyenLieu\Entities\HoaDonNguyenLieu;
use Modules\KhachHangThanThiet\Entities\KhachHangThanThiet;
use Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $month = Carbon::now()->month;  
        $HoaDonGoiMons = HoaDonGoiMon:: whereMonth('created_at','=',$month)->get();
        $HoaDonNguyenLieus =HoaDonNguyenLieu:: whereMonth('created_at','=',$month)->get();
       
        $TongSoHoaDon =0;
        $TongDoanhThuTheoThang =0;
       
        // Tinh tong doanh thu thang
        foreach($HoaDonGoiMons as $HoaDonGoiMon){
            $TongDoanhThuTheoThang += $HoaDonGoiMon->TongTien;
            $TongSoHoaDon +=1;
        }
        foreach($HoaDonNguyenLieus as $HoaDonNguyenLieu){
            $TongDoanhThuTheoThang -= $HoaDonNguyenLieu->TongTien;
            $TongSoHoaDon +=1;
        }

        // Tinh tong doanh thu ngay  
        $HoaDonGoiMonTrongNgays = HoaDonGoiMon:: whereDate('created_at', Carbon::today())->get();
        $HoaDonNguyenLieuTrongNgays =HoaDonNguyenLieu:: whereDate('created_at', Carbon::today())->get();
        $TongDoanhThuTheoNgay =0;
        foreach($HoaDonGoiMonTrongNgays as $HoaDonGoiMonTrongNgay){
            $TongDoanhThuTheoNgay += $HoaDonGoiMonTrongNgay->TongTien;
        }
        foreach($HoaDonNguyenLieuTrongNgays as $HoaDonNguyenLieuTrongNgay){
            $TongDoanhThuTheoNgay -= $HoaDonNguyenLieuTrongNgay->TongTien;
        }

        // KhachHangThanThiet
        $TongSoKhachHang = KhachHangThanThiet::count();
        if (Auth::user()->Role == 'QuanLy')
            return view('QuanLy.QuanLyDashboard',['TongDoanhThuTheoThang'=> $TongDoanhThuTheoThang,'TongSoHoaDon'=>$TongSoHoaDon,'TongDoanhThuTheoNgay'=> $TongDoanhThuTheoNgay,'TongSoKhachHang'=> $TongSoKhachHang]);

        if (Auth::user()->Role == 'ThuNgan')
            return view('ThuNgan.ThuNganDashboard',['TongDoanhThuTheoThang'=> $TongDoanhThuTheoThang,'TongSoHoaDon'=>$TongSoHoaDon,'TongDoanhThuTheoNgay'=> $TongDoanhThuTheoNgay,'TongSoKhachHang'=> $TongSoKhachHang]);
    }
}
