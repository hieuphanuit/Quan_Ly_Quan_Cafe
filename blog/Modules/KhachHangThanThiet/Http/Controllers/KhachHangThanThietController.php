<?php

namespace Modules\KhachHangThanThiet\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\KhachHangThanThiet\Entities\KhachHangThanThiet;

class KhachHangThanThietController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $KhachHangThanThiets = KhachHangThanThiet::orderBy('id', 'DESC')->paginate(20);
        return view('khachhangthanthiet::index', ['KhachHangThanThiets' => $KhachHangThanThiets]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('khachhangthanthiet::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $KhachHangThanThiet = new KhachHangThanThiet;
        $validator = Validator::make($request->all(), $KhachHangThanThiet->rules, $KhachHangThanThiet->messages);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        $KhachHangThanThiet = new KhachHangThanThiet($request->all());
        $KhachHangThanThiet->save();

        return redirect('/khachhangthanthiet');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $KhachHangThanThiet = KhachHangThanThiet::find($id);
        if (!$KhachHangThanThiet)
            return redirect('/khachhangthanthiet')->withErrors('Khách hàng không tồn tại');
        return view('khachhangthanthiet::show', compact('KhachHangThanThiet'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $KhachHangThanThiet = KhachHangThanThiet::find($id);
        if (!$KhachHangThanThiet)
            return redirect('/khachhangthanthiet')->withErrors('Khách hàng không tồn tại');
        return view('khachhangthanthiet::edit', ['KhachHangThanThiet' => $KhachHangThanThiet]);
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
        $KhachHangThanThiet = KhachHangThanThiet::where('id', '=', $id)->first();

        if (!$KhachHangThanThiet)
            return redirect('/khachhangthanthiet')->withErrors('Khách hàng không tồn tại');

        $validator = Validator::make($request->all(), $KhachHangThanThiet->rules, $KhachHangThanThiet->messages);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        $KhachHangThanThiet->update($request->all());

        return redirect()->back()->with('message', 'Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $KhachHangThanThiet = KhachHangThanThiet::find($id);
        $KhachHangThanThiet->delete();
        return redirect('/khachhangthanthiet');
    }
    public function search(Request $request)
    {
        $HoVaTen = $request->get('timkiem_hovaten', '');
        $SoDienThoai = $request->get('timkiem_sdt', '');

        if (!$HoVaTen && !$SoDienThoai) {
            $KhachHangThanThiets = KhachHangThanThiet::all();
        }

        if (!$HoVaTen) {
            $KhachHangThanThiets = KhachHangThanThiet::where('SoDienThoai', '=', $SoDienThoai)
                ->get();
        }

        if (!$SoDienThoai) {
            $KhachHangThanThiets = KhachHangThanThiet::where('HoVaTen', 'like', '%' . $HoVaTen . '%')
                ->get();
        }

        if ($HoVaTen && $SoDienThoai) { 
            $KhachHangThanThiets = KhachHangThanThiet::where('HoVaTen', 'like', '%' . $HoVaTen . '%')
                ->where('SoDienThoai', '=', $SoDienThoai)
                ->get();
        }
        return view('khachhangthanthiet::search', compact('KhachHangThanThiets','HoVaTen','SoDienThoai'));
    }
}
