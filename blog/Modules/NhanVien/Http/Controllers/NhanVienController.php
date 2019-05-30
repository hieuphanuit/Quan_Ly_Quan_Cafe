<?php

namespace Modules\NhanVien\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\NhanVien\Entities\NhanVien;
class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
		$NhanViens = NhanVien::all();
        return view('nhanvien::index',['NhanViens'=>$NhanViens]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('nhanvien::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
		$NhanVien= new NhanVien;
        $NhanVien->HoVaTen=$request->get('HoVaTen');
        $NhanVien->Role=$request->get('Role');
        $NhanVien->GioiTinh=$request->get('GioiTinh');
        $NhanVien->DiaChi=$request->get('DiaChi');
        $NhanVien->SoDienThoai=$request->get('SoDienThoai');
		$NhanVien->Email=$request->get('Email');
        $NhanVien->CMND=$request->get('CMND');
		if ($request->get('MatKhau')==""){
			$NhanVien->MatKhau= 0;
		}else{
			$NhanVien->MatKhau= $request->get('MatKhau');
		}
        $NhanVien->LuongTheoGio=$request->get('LuongTheoGio');
        $NhanVien->TrangThai=1;
        $NhanVien->save();
        return redirect('/nhanvien');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
		$NhanVien = NhanVien::where('id','=',$id)->first();
        return view('nhanvien::show', ['NhanVien'=>$NhanVien]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {	
	
        $NhanVien = NhanVien::find($id);
        if (!$NhanVien)
            return redirect('/nhanvien')->withErrors('Nhân viên không tồn tại');
        return view('nhanvien::edit', ['NhanVien' => $NhanVien]);
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
		$NhanVien = NhanVien::where('id','=',$id)->first();
		$validator = Validator::make($request->all(), $NhanVien->rules, $NhanVien->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$NhanVien->HoVaTen=$request['HoVaTen'];
			$NhanVien->Role=$request['Role'];
			$NhanVien->GioiTinh=$request['GioiTinh'];
			$NhanVien->DiaChi=$request['DiaChi'];
			$NhanVien->SoDienThoai=$request['SoDienThoai'];
			$NhanVien->Email=$request['Email'];
			$NhanVien->CMND=$request['CMND'];
			if ($request['Role']=="PhucVu"){
				$NhanVien->MatKhau= 0;
			}else {
			$NhanVien->MatKhau= $request['MatKhau'];
			}
			$NhanVien->LuongTheoGio=$request['LuongTheoGio'];
			$NhanVien->TrangThai=$request['TrangThai'];
			$NhanVien->save();
			return redirect()->back()->with('message', 'Cập nhập thành công');
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
		$NhanVien = NhanVien::where('id','=',$id)->first();
		$NhanVien->delete();
		return redirect()->back();
    }
}
