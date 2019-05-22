@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
   <li class="breadcrumb-item">
    <a href="#">Nhân viên</a>
  </li>
  <li class="breadcrumb-item active">Thêm nguyên liệu</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thêm nguyên liệu</h1>
<div class="container">
	<form class="themnguyenlieu" action="{{route('nhanvien.store')}}" method="POST">
		<div class="form-group">
			<label for="MaNguyenLieu">Mã số nguyên liệu: </label>
			<input type="text" id="MaNguyenLieu" name="MaNguyenLieu"  class="form-control" readonly/>
		</div>
		<div class="form-group">
			<label for="TenNguyenLieu">Tên nguyên liệu: </label>
			<input type="text" id="HoVaTen" name="TenNguyenLieu"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="SoLuongTon">Số lượng tồn: </label>
			<input type="number" id="Role" name="Role"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="GiaUocLuong">Giá ước lượng: </label>
			<input type="number" id="GiaUocLuong" name="GioiTinh"  class="form-control"/>
		</div
		<div class="form-group">
				<button class="btn btn-info" type="submit">Thêm</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
@endsection

