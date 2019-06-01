<?php

namespace Modules\HoaDonGoiMon\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ThucDon\Entities\ThucDon;
use Modules\HoaDonGoiMon\Entities\HoaDonGoiMon;
use Modules\KhachHangThanThiet\Entities\KhachHangThanThiet;
use Auth;

class HoaDonGoiMonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('hoadongoimon::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $KhachHangThanThiets = KhachHangThanThiet ::all();
        $ThucDons = ThucDon::all();
        return view('hoadongoimon::create',['ThucDons'=> $ThucDons, 'KhachHangThanThiets'=>$KhachHangThanThiets]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $monsSelected = $request->monSelected;
        $quantitys = $request->quantity;
        $khachhangthanthiet = $request->kh;
        $hoaDonGoiMon = new HoaDonGoiMon([
                'MaNhanVien' => Auth::user()->id,
                'MaKhachHang' => $khachhangthanthiet,
                'TongTien' => 0
            ]);
        $hoaDonGoiMon->save();
        $mons = [];
        foreach($monsSelected as $index=>$monSelected){
            $mons[] = [
                'MaMon' => $monSelected,
                'SoLuong'   => $quantitys[$index],
                'DonGia'    => 0
            ];
        }
        $hoaDonGoiMon->ChiTietHoaDonGoiMon()->createMany($mons);
        return view('hoadongoimon::index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('hoadongoimon::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('hoadongoimon::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
