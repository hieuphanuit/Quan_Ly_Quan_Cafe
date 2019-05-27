@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href='{{url("/khachhangthanthiet")}}'>Khách hàng</a>
  </li>
  <li class="breadcrumb-item active">Cập nhật khách hàng thân thiết</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Cập nhật khách hàng thân thiết</h1>
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
	<form class="themkhachhang" action='{{url("/khachhangthanthiet/$KhachHangThanThiet->id/edit")}}' method="POST" >
		<div class="form-group">
			<label for="MaKhachHang">Mã khách hàng: </label>
			<input type="text" id="MaKhachHang" name="MaKhachHang"  class="form-control" value="{{$KhachHangThanThiet->id}}" readonly />
		</div>
		<div class="form-group">
			<label for="HoVaTen">Họ và tên: </label>
			<input type="text" id="HoVaTen" name="HoVaTen"  class="form-control" value="{{$KhachHangThanThiet->HoVaTen}}"/>
		</div>
		<div>
			<label for="DiaChi">Địa chỉ: </label>
			<input type="text" id="DiaChi" name="DiaChi"  class="form-control" value="{{$KhachHangThanThiet->DiaChi}}"/>
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại: </label>
			<input type="text" id="SoDienThoai" name="SoDienThoai"  class="form-control" value="{{$KhachHangThanThiet->SoDienThoai}}"/>
		</div>
		<div class="form-group">
			<label for="Email">Email: </label>
			<input type="text" id="Email" name="Email"  class="form-control" value="{{$KhachHangThanThiet->Email}}"/>
		</div>
		<div class="form-group">
				<button class="btn btn-info" type="submit">Cập nhật</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
@endsection

