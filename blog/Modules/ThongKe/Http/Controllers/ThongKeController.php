<?php

namespace Modules\ThongKe\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ThucDon\Entities\ThucDon;
use PDF;
use Modules\HoaDonGoiMon\Entities\HoaDonGoiMon;
use Modules\NhanVien\Entities\NhanVien;
use DateTime;

class ThongKeController extends Controller
{
    const CA_SANG_START = 0;
    const CA_SANG_STOP = 12;
    const CA_CHIEU_START = 12;
    const CA_CHIEU_STOP = 17;
    const CA_TOI_START = 17;
    const CA_TOI_STOP= 24;

	public function thongketheoca(Request $request)
    {
        
        $dateFilter = $request->get('date');
        $caFilter = $request->get('ca');
        $nhanVienFilter = $request->get('nhanvien');
        $ThucDons = ThucDon::all();
        $NhanViens = NhanVien::where('Role','ThuNgan')->get();

        $HoaDons = [];
        $TongThu = 0;
        if($dateFilter && $caFilter){
            $timeStart = new DateTime($dateFilter);
            $timeEnd = new DateTime($dateFilter);
            if($caFilter == "sang"){
                $timeStart->setTime(self::CA_SANG_START,0,0);
                $timeEnd->setTime(self::CA_SANG_STOP,0,0);
            }
            if($caFilter == "chieu"){
                $timeStart->setTime(self::CA_SANG_START,0,0);
                $timeEnd->setTime(self::CA_CHIEU_STOP,0,0);
            }
            if($caFilter == "toi"){
                $timeStart->setTime(self::CA_SANG_START,0,0);
                $timeEnd->setTime(self::CA_TOI_STOP,0,0);
            }
            $query = HoaDonGoiMon::with('NguoiLap')
            ->whereBetween('created_at', [$timeStart->format("Y-m-d H:i:s") , $timeEnd->format("Y-m-d H:i:s")]);
            if($nhanVienFilter != -1){
                $query = $query->where('MaNhanVien', $nhanVienFilter);
            }
            $HoaDons = $query->get();
            $TongThu = array_sum(array_pluck($HoaDons, 'TongTien'));
        }
        
        return view('thongke::thongketheoca',
        compact(
            'ThucDons',
            'NhanViens',
            'HoaDons',
            'TongThu',
            'dateFilter',
            'caFilter',
            'nhanVienFilter'
        ));
    }
	
	public function thongketheongay()
    {
        return view('thongke::thongketheongay');
    }
	
	public function thongketheothang()
    {
        return view('thongke::thongketheothang');
    }

    public function exportPDFThongKeCa(Request $request){

        $dateFilter = $request->get('date');
        $caFilter = $request->get('ca');
        $nhanVienFilter = $request->get('nhanVien');
        $HoaDons = [];
        $TongThu = 0;
        if($dateFilter && $caFilter){
            $timeStart = new DateTime($dateFilter);
            $timeEnd = new DateTime($dateFilter);
            if($caFilter == "sang"){
                $timeStart->setTime(self::CA_SANG_START,0,0);
                $timeEnd->setTime(self::CA_SANG_STOP,0,0);
            }
            if($caFilter == "chieu"){
                $timeStart->setTime(self::CA_SANG_START,0,0);
                $timeEnd->setTime(self::CA_CHIEU_STOP,0,0);
            }
            if($caFilter == "toi"){
                $timeStart->setTime(self::CA_SANG_START,0,0);
                $timeEnd->setTime(self::CA_TOI_STOP,0,0);
            }
            $query = HoaDonGoiMon::with('NguoiLap')
            ->whereBetween('created_at', [$timeStart->format("Y-m-d H:i:s") , $timeEnd->format("Y-m-d H:i:s")]);
            if($nhanVienFilter != -1){
                $query = $query->where('MaNhanVien', $nhanVienFilter);
            }
            $TongThu = array_sum(array_pluck($HoaDons, 'TongTien'));
        }
        $pdf = PDF::loadView('thongke::ThongKeCaFDPTemplate', compact('HoaDons','TongThu','dateFilter','caFilter','nhanVienFilter'));
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'arial']);
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
