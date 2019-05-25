@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Khách hàng</a>
  </li>
  <li class="breadcrumb-item active">Thông tin khách hàng thân thiết</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thông tin khách hàng thân thiết</h1>
<div class="container">
	<form class="themkhachhang">
		<div class="form-group">
			<label for="MaKhachHang">Mã khách hàng: </label>
			<input type="text" id="MaKhachHang" name="MaKhachHang"  class="form-control" value="{{$KhachHangThanThiet->id}}" readonly />
		</div>
		<div class="form-group">
			<label for="HoVaTen">Họ và tên: </label>
			<input type="text" id="HoVaTen" name="HoVaTen"  class="form-control" value="{{$KhachHangThanThiet->HoVaTen}}" readonly />
		</div>
		<div>
			<label for="DiaChi">Địa chỉ: </label>
			<input type="text" id="DiaChi" name="DiaChi"  class="form-control" value="{{$KhachHangThanThiet->DiaChi}}" readonly />
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại: </label>
			<input type="text" id="SoDienThoai" name="SoDienThoai"  class="form-control" value="{{$KhachHangThanThiet->SoDienThoai}}" readonly />
		</div>
		<div class="form-group">
			<label for="Email">Email: </label>
			<input type="text" id="Email" name="Email"  class="form-control" value="{{$KhachHangThanThiet->Email}}" readonly />
		</div>
		<div class="form-group">
			<label for="TrangThai">Trạng thái: </label>
			<input type="text" id="TrangThai" name="TrangThai"  class="form-control" value="{{$KhachHangThanThiet->TrangThai}}" readonly />
		</div>
	</form>
</div>
@endsection

