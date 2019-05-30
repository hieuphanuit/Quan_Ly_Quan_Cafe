<?php

namespace Modules\NguyenLieu\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\NguyenLieu\Entities\NguyenLieu;
use Modules\Kho\Entities\Kho;
class NguyenLieuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $NguyenLieus = NguyenLieu:: all();
        return view('nguyenlieu::index',['NguyenLieus'=>$NguyenLieus]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('nguyenlieu::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
		$NguyenLieu = new NguyenLieu;
        $validator = Validator::make($request->all(), $NguyenLieu->rules, $NguyenLieu->messages);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();    

        $NguyenLieu = new NguyenLieu($request->all());
        $NguyenLieu->save();
        return redirect('/kho');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $NguyenLieu = NguyenLieu::find($id);
        if (!$NguyenLieu)
            return redirect('/kho')->withErrors('Nguyên liệu không tồn tại');
        return view('nguyenlieu::show', ['NguyenLieu' => $NguyenLieu]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $NguyenLieu = NguyenLieu::find($id);
        if (!$NguyenLieu)
            return redirect('/kho')->withErrors('Nguyên liệu không tồn tại');
        return view('nguyenlieu::edit', ['NguyenLieu' => $NguyenLieu]);
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
        $NguyenLieu = NguyenLieu::where('id', '=', $id)->first();

        if (!$NguyenLieu)
            return redirect('/kho')->withErrors('Nguyên liệu không tồn tại');

        $validator = Validator::make($request->all(), $NguyenLieu->rules, $NguyenLieu->messages);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        $NguyenLieu->update($request->all());

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
        $NguyenLieu = NguyenLieu::find($id);
        $NguyenLieu->delete();
        return redirect('/kho');
    }
}
