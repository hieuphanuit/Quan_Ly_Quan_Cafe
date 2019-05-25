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
    public function index()
    {
		$KhachHangThanThiets = KhachHangThanThiet::all();
        return view('khachhangthanthiet::index',['KhachHangThanThiets'=> $KhachHangThanThiets]);
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
        //
		$KhachHangThanThiet = new KhachHangThanThiet;
		$KhachHangThanThiet->HoVaTen= $request-> get('HoVaTen');
		$KhachHangThanThiet->DiaChi= $request-> get('DiaChi');
		$KhachHangThanThiet->SoDienThoai= $request-> get('SoDienThoai');
		$KhachHangThanThiet->Email= $request-> get('Email');
		$KhachHangThanThiet->TrangThai= 1;
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
		$KhachHangThanThiet = KhachHangThanThiet::where ('id','=',$id)->first();
        return view('khachhangthanthiet::show',['KhachHangThanThiet'=>$KhachHangThanThiet]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
		$KhachHangThanThiet = KhachHangThanThiet::where('id','=',$id)->first();
        return view('khachhangthanthiet::edit', ['KhachHangThanThiet'=>$KhachHangThanThiet]);
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
		$KhachHangThanThiet = KhachHangThanThiet::where('id','=',$id)->first();
		$validator = Validator::make($request->all(), $KhachHangThanThiet->rules, $KhachHangThanThiet->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$KhachHangThanThiet->HoVaTen= $request['HoVaTen'];
			$KhachHangThanThiet->DiaChi= $request['DiaChi'];
			$KhachHangThanThiet->SoDienThoai= $request['SoDienThoai'];
			$KhachHangThanThiet->Email= $request['Email'];
			$KhachHangThanThiet->TrangThai= $request['TrangThai'];
			$KhachHangThanThiet->save();
			return redirect()->back();
		}
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
		$KhachHangThanThiet = KhachHangThanThiet::where('id','=',$id)->first();
		$KhachHangThanThiet->delete();
		return redirect('/khachhangthanthiet');
    }
	   public function search(Request $request)
    {
        $HoVaTen= $request['timkiem_hovaten'];
		$SoDienThoai= $request['timkiem_sdt'];
		if($HoVaTen!= "" & $SoDienThoai=="" ){
			 $KhachHangThanThiets = KhachHangThanThiet::where('HoVaTen','like','%'.$HoVaTen.'%')->get();
		} elseif($HoVaTen== "" & $SoDienThoai !="" ){
			 $KhachHangThanThiets = KhachHangThanThiet::where('SoDienThoai','=',$SoDienThoai)->get();
		} elseif($HoVaTen != "" & $SoDienThoai !="" ) {
        $KhachHangThanThiets = KhachHangThanThiet::where('HoVaTen','like','%'.$HoVaTen.'%') ->where ('SoDienThoai','=',$SoDienThoai) ->get();
		} else {
			$KhachHangThanThiets = KhachHangThanThiet::all();
		}
        return view ('khachhangthanthiet::search',['KhachHangThanThiets' => $KhachHangThanThiets]);
    }
}
