@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Kho</a>
  </li>
  <li class="breadcrumb-item active">Cập nhật nguyên liệu kho</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Cập nhật nguyên liệu kho</h1>
<div class="container">
	<form class="themnguyenlieukho">
		<div class="form-group">
			<label for="MaNguyeLieu">Mã nguyên liệu: </label>
			<input type="text" id="MaNguyeLieu" name="MaNguyeLieu"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TenNguyenLieu">Tên nguyên liệu: </label>
			<input type="text" id="TenNguyenLieu" name="TenNguyenLieu"  class="form-control"/>
		</div>
		<div style="padding-bottom:15px;">
			<label for="DonViTinh">Đơn vị tính: </label>
			<select class="browser-default custom-select">
			  <option value="1">Cái</option>
			  <option value="2">Kg</option>
			  <option value="3">Lon</option>
			</select>
		</div>
		<div class="form-group">
			<label for="SoLuongTon">Số lượng tồn: </label>
			<input type="text" id="SoLuongTon" name="SoLuongTon"  class="form-control"/>
		</div>		
		<div class="form-group">
			<button class="btn btn-info" type="submit">Cập nhật</button>
		</div>
	</form>
</div>
@endsection