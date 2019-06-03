<?php

namespace Modules\HoaDonNguyenLieu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\NguyenLieu\Entities\NguyenLieu;
use Modules\HoaDonNguyenLieu\Entities\HoaDonNguyenLieu;
use Auth;
use Validator;

class HoaDonNguyenLieuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $hoaDonNguyenLieus = HoaDonNguyenLieu::with('NhanVien')->orderBy('id', 'DESC')->paginate(20);
        return view('hoadonnguyenlieu::index',compact('hoaDonNguyenLieus'));
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
        $quantitys = $request->quantity;
        $prices = $request->price;

        $validator = Validator::make($request->all(),
                                ['monSelected' => 'required'], 
                                $request->all()
                                );
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        $hoaDonNguyenLieu = new HoaDonNguyenLieu([
                'MaNhanVien' => Auth::user()->id,
                'TongTien' => $request->total
            ]);
        $hoaDonNguyenLieu->save();
        $mons = [];
        foreach($monsSelected as $index=>$monSelected){
            $nguyenlieu = NguyenLieu:: find ($monSelected);
            $nguyenlieu->SoLuongTon = $nguyenlieu->SoLuongTon + $quantitys[$index];
            $mons[] = [
                'MaNguyenLieu' => $monSelected,
                'SoLuong'   => $quantitys[$index],
                'DonGia'    => $prices[$index] 
            ];
            $nguyenlieu->save();    
        }
        $hoaDonNguyenLieu->ChiTietHoaDonNguyenLieu()->createMany($mons);
        
        return redirect('/hoadonnguyenlieu');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $hoaDonNguyenLieu = HoaDonNguyenLieu::with('ChiTietHoaDonNguyenLieu','ChiTietHoaDonNguyenLieu.NguyenLieu','NhanVien')->find($id);
        return view('hoadonnguyenlieu::show',compact('hoaDonNguyenLieu'));
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
