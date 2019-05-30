<?php

namespace Modules\ThucDon\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ThucDon\Entities\ThucDon;
class ThucDonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
		$ThucDons =ThucDon::all();
        return view('thucdon::index',['ThucDons'=>$ThucDons]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('thucdon::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $ThucDon = new ThucDon;
        $validator = Validator::make($request->all(), $ThucDon->rules, $ThucDon->messages);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        $ThucDon = new ThucDon($request->all());
        $ThucDon->save();

        return redirect('/thucdon');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $ThucDon = ThucDon::find($id);
        if (!$ThucDon)
            return redirect('/thucdon')->withErrors('Thực đơn không tồn tại');
        return view('thucdon::show', compact('ThucDon'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $ThucDon = ThucDon::find($id);
        if (!$ThucDon)
            return redirect('/thucdon')->withErrors('Thực đơn không tồn tại');
        return view('thucdon::edit', ['ThucDon' => $ThucDon]);
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
		$ThucDon= ThucDon::where ('id','=',$id)->first();
		$validator = Validator::make($request->all(), $ThucDon->rules, $ThucDon->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$ThucDon->TenMon= $request['TenMon'];
			$ThucDon->DonGia= $request['DonGia'];
			$ThucDon->save();
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
		$ThucDon = ThucDon::where('id','=',$id)->first();
		$ThucDon->delete();
		return redirect()->back();
    }
}
