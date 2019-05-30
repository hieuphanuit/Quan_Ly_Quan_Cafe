@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
   <li class="breadcrumb-item">
    <a href="#">Kho</a>
  </li>
  <li class="breadcrumb-item active">Thêm nguyên liệu</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thêm nguyên liệu</h1>
<div class="container">
	@if($errors->any())
	<div class="alert alert-danger" role="alert">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
	</div>	
	@endif
	<form class="themnguyenlieu" action="{{route('nguyenlieu.store')}}" method="POST">
		<div class="form-group">
			<label for="TenNguyenLieu">Tên nguyên liệu: </label>
			<input type="text" id="TenNguyenLieu" name="TenNguyenLieu"  value="{{old('TenNguyenLieu')}}" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="GiaUocLuong">Giá ước lượng: </label>
			<input type="text" id="GiaUocLuong" name="GiaUocLuong" value="{{old('GiaUocLuong')}}" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="SoLuongTon">Số lượng tồn: </label>
			<input type="text" id="SoLuongTon" name="SoLuongTon" value="{{old('SoLuongTon')}}" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="DonViTinh">Đơn vị tính: </label>
			<input type="text" id="DonViTinh" name="DonViTinh" value="{{old('DonViTinh')}}" class="form-control"/>
		</div>
		<div class="form-group">
				<button class="btn btn-info" type="submit">Thêm</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
@endsection

