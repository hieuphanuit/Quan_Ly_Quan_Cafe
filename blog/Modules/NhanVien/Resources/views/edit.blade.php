@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Nhân viên</a>
  </li>
  <li class="breadcrumb-item active">Cập nhật nhân viên</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Cập nhật nhân viên</h1>
<div class="container">
	<form class="editnhanvien" action='{{url("/nhanvien/$NhanVien->id/edit")}}' method="POST" >
		<div class="form-group">
			<label for="MaNhanVien">Mã số nhân viên: </label>
			<input type="text" id="MaNhanVien" name="MaNhanVien"  class="form-control" value="{{$NhanVien->id}}" readonly/>
		</div>
		<div class="form-group">
			<label for="HoVaTen">Họ và tên: </label>
			<input type="text" id="HoVaTen" name="HoVaTen"  class="form-control"  value="{{$NhanVien->HoVaTen}}"/>
		</div>
		<div class="form-group">
			<label for="Role">Role: </label>
			<input type="text" id="Role" name="Role"  class="form-control" value="{{$NhanVien->Role}}"/>
		</div>
		<div class="form-group">
			<label for="GioiTinh">Giới tính: </label>
			<input type="text" id="GioiTinh" name="GioiTinh"  class="form-control" value="{{$NhanVien->GioiTinh}}"/>
		</div>
		<div class="form-group">
			<label for="DiaChi">Địa chỉ: </label>
			<input type="text" id="DiaChi" name="DiaChi"  class="form-control" value="{{$NhanVien->DiaChi}}"/>
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại: </label>
			<input type="text" id="SoDienThoai" name="SoDienThoai"  class="form-control" value="{{$NhanVien->SoDienThoai}}"/>
		</div>
		<div class="form-group">
			<label for="CMND">Chứng minh nhân dân: </label>
			<input type="text" id="CMND" name="CMND"  class="form-control" value="{{$NhanVien->CMND}}"/>
		</div>
		<div class="form-group">
			<label for="Email">Email: </label>
			<input type="text" id="Email" name="Email"  class="form-control" value="{{$NhanVien->Email}}"/>
		</div>
		<div class="form-group">
			<label for="HinhAnh">Hình ảnh: </label>
			<input type="text" id="HinhAnh" name="HinhAnh"  class="form-control" value="{{$NhanVien->HinhAnh}}"/>
		</div>
		<div class="form-group">
			<label for="MatKhau">Mật khẩu: </label>
			<input type="text" id="MatKhau" name="MatKhau"  class="form-control" value="{{$NhanVien->MatKhau}}"/>
		</div>
		<div class="form-group">
			<label for="LuongTheoGio">Lương theo giờ: </label>
			<input type="text" id="LuongTheoGio" name="LuongTheoGio"  class="form-control" value="{{$NhanVien->LuongTheoGio}}"/>
		</div>
		<div class="form-group">
			<label for="TrangThai">Trạng thái: </label>
			<input type="text" id="TrangThai" name="TrangThai"  class="form-control" value="{{$NhanVien->TrangThai}}"/>
		</div>
		<div class="form-group">
				<button class="btn btn-info" type="submit">Cập nhật</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
@endsection

