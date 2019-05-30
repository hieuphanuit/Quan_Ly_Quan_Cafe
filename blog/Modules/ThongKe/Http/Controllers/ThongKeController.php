<?php

namespace Modules\ThongKe\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use PDF;

class ThongKeController extends Controller
{
	public function thongketheoca()
    {
        return view('thongke::thongketheoca');
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
}
