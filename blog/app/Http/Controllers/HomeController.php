<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\HoaDonGoiMon\Entities\HoaDonGoiMon;
use Modules\HoaDonNguyenLieu\Entities\HoaDonNguyenLieu;
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
        $TongDoanhThuTheoThang =0;
        foreach($HoaDonGoiMons as $HoaDonGoiMon){
            $TongDoanhThuTheoThang += $HoaDonGoiMon->TongTien;
        }
        foreach($HoaDonNguyenLieus as $HoaDonNguyenLieu){
            $TongDoanhThuTheoThang -= $HoaDonNguyenLieu->TongTien;
        }
        if (Auth::user()->Role == 'QuanLy')
            return view('QuanLy.QuanLyDashboard',['TongDoanhThuTheoThang'=> $TongDoanhThuTheoThang]);

        if (Auth::user()->Role == 'ThuNgan')
            return view('ThuNgan.ThuNganDashboard');
    }
}
