@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Kho</a>
	</li>
	<li class="breadcrumb-item active">Cập nhật nguyên liệu</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Cập nhật nguyên liệu</h1>
<div class="container">
	@if(session()->has('message'))
	<div class="alert alert-success">
		{{ session()->get('message') }}
	</div>
	@endif
	@if($errors->any())
	<div class="alert alert-danger" role="alert">
		@foreach ($errors->all() as $error)
		<p>{{ $error }}</p>
		@endforeach
	</div>
	@endif
	<form class="capnhatnguyenlieu" action='{{url("/nguyenlieu/$NguyenLieu->id")}}' method="POST">
		<div class="form-group">
			<label for="TenNguyenLieu">Tên nguyên liệu: </label>
			<input type="text" id="TenNguyenLieu" name="TenNguyenLieu" value="{{$NguyenLieu->TenNguyenLieu}}" class="form-control" />
		</div>
		<div class="form-group">
			<label for="GiaUocLuong">Giá ước lượng: </label>
			<input type="text" id="GiaUocLuong" name="GiaUocLuong" value="{{$NguyenLieu->GiaUocLuong}}" class="form-control" />
		</div>
		<div class="form-group">
			<label for="SoLuongTon">Số lượng tồn: </label>
			<input type="text" id="SoLuongTon" name="SoLuongTon" value="{{$NguyenLieu->SoLuongTon}}" class="form-control" />
		</div>
		<div class="form-group">
			<label for="DonViTinh">Đơn vị tính: </label>
			<input type="text" id="DonViTinh" name="DonViTinh" value="{{$NguyenLieu->DonViTinh}}" class="form-control" />
		</div>
		<div class="form-group">
			<button class="btn btn-info" type="submit">Cập nhật</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
@endsection