<?php

namespace Modules\HoaDonGoiMon\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ThucDon\Entities\ThucDon;
use Modules\HoaDonGoiMon\Entities\HoaDonGoiMon;
use Modules\ChiTietHoaDonGoiMon\Entities\ChiTietHoaDonGoiMon;
use Modules\KhachHangThanThiet\Entities\KhachHangThanThiet;
use Auth;
use Modules\NhanVien\Entities\NhanVien;

class HoaDonGoiMonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $HoaDonGoiMons = HoaDonGoiMon::with('KhachHangThanThiet')->orderBy('id', 'DESC')->paginate(20);
        return view('hoadongoimon::index', ['HoaDonGoiMons' => $HoaDonGoiMons]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $KhachHangThanThiets = KhachHangThanThiet::all();
        $ThucDons = ThucDon::all();
        return view('hoadongoimon::create', ['ThucDons' => $ThucDons, 'KhachHangThanThiets' => $KhachHangThanThiets]);
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
        $prices = $request->price;
        $khachhangthanthiet = $request->kh;
        $hoaDonGoiMon = new HoaDonGoiMon([
            'MaNhanVien' => Auth::user()->id,
            'MaKhachHang' => $khachhangthanthiet,
            'TongTien' => $request->total
        ]);
        $hoaDonGoiMon->save();
        $mons = [];
        foreach ($monsSelected as $index => $monSelected) {
            $mons[] = [
                'MaMon' => $monSelected,
                'SoLuong'   => $quantitys[$index],
                'DonGia'    => 0
            ];
        }
        $hoaDonGoiMon->ChiTietHoaDonGoiMon()->createMany($mons);
        return redirect()->route('danhsachhoadongoimon');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $hoaDonGoiMon = HoaDonGoiMon::find($id);
        $chiTietHoaDonGoiMons = ChiTietHoaDonGoiMon::where('MaHoaDonGoiMon', '=', $id)->get();  
        if ($hoaDonGoiMon->MaKhachHang != 0) {
            $KhachHangThanThiet = KhachHangThanThiet::where('id', '=', $hoaDonGoiMon->MaKhachHang)->first();
            return view('hoadongoimon::show', ['HoaDonGoiMon' => $hoaDonGoiMon, 'ChiTietHoaDonGoiMons' => $chiTietHoaDonGoiMons, 'KhachHangThanThiet' => $KhachHangThanThiet]);
        } else {
            return view('hoadongoimon::show', ['HoaDonGoiMon' => $hoaDonGoiMon, 'ChiTietHoaDonGoiMons' => $chiTietHoaDonGoiMons, 'KhachHangThanThiet' => 'Không có']);
        }
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
