<?php

namespace Modules\ThongKe\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ThucDon\Entities\ThucDon;
use PDF;
use Modules\HoaDonGoiMon\Entities\HoaDonGoiMon;
use Modules\NhanVien\Entities\NhanVien;

class ThongKeController extends Controller
{
	public function thongketheoca()
    {
        $ThucDons = ThucDon ::all();
        $NhanViens =NhanVien ::all();
        return view('thongke::thongketheoca',['ThucDons'=>$ThucDons, 'NhanViens'=>$NhanViens]);
    }
	
	public function thongketheongay()
    {
        return view('thongke::thongketheongay');
    }
	
	public function thongketheothang()
    {
        return view('thongke::thongketheothang');
    }

    public function exportPDFThongKeCa(){
        $data = [];
        $pdf = PDF::loadView('thongke::ThongKeCaFDPTemplate', $data);
        
        return $pdf->download('thongKe.pdf');
    }
    
    public function exportPDFThongKeThang(){
        $data = [];
        $pdf = PDF::loadView('thongke::ThongKeCaFDPTemplate', $data);
        
        return $pdf->download('thongKe.pdf');
    }

    public function exportPDFThongKeNgay(){
        $data = [];
        $pdf = PDF::loadView('thongke::ThongKeCaFDPTemplate', $data);
        
        return $pdf->download('thongKe.pdf');
    }
    
    public function search(Request $request){
        $Ca = $request->get('ca_timkiem','');
        $NhanVien =$request->get ('nhanvien_timkiem','');
        $Mon = $request->get ('mon_timkiem','');
        if ( !$Ca && !$NhanVien && !$Mon){
            $HoaDonGoiMons = HoaDonGoiMon :: all();
        }
      
    }
}
