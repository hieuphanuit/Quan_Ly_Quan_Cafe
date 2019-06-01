<?php

namespace Modules\HoaDonNguyenLieu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\NguyenLieu\Entities\NguyenLieu;
use Modules\HoaDonNguyenLieu\Entities\HoaDonNguyenLieu;
use Auth;

class HoaDonNguyenLieuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('hoadonnguyenlieu::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $NguyenLieus = NguyenLieu::all();
        return view('hoadonnguyenlieu::create',['NguyenLieus'=> $NguyenLieus]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //add validate
        $monsSelected = $request->monSelected;
        var_dump($request->all());
        $quantitys = $request->quantity;

        $hoaDonNguyenLieu = new HoaDonNguyenLieu([
                'MaNhanVien' => Auth::user()->id,
                'TongTien' => 0
            ]);
        $hoaDonNguyenLieu->save();
        $mons = [];
        foreach($monsSelected as $index=>$monSelected){
            $mons[] = [
                'MaNguyenLieu' => $monSelected,
                'SoLuong'   => $quantitys[$index],
                'DonGia'    => 0
            ];
        }
        $hoaDonNguyenLieu->ChiTietHoaDonNguyenLieu()->createMany($mons);
		return view('hoadonnguyenlieu::index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('hoadonnguyenlieu::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('hoadonnguyenlieu::edit');
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
