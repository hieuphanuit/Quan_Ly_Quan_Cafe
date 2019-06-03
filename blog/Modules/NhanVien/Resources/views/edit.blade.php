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
<div id="dom-target" style="display: none;">
	<?php
	if ($NhanVien->Role == "QuanLy") {
		$output = 0;
	}
	if ($NhanVien->Role == "ThuNgan") {
		$output = 1;
	}
	if ($NhanVien->Role == "PhucVu") {
		$output = 2;
	}
	echo htmlspecialchars($output);
	?>
</div>
<h1 style="text-align: center;">Cập nhật nhân viên</h1>
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
	<form class="editnhanvien" action='{{url("/nhanvien/$NhanVien->id")}}' method="POST">
		<div class="form-group">
			<label for="MaNhanVien">Mã số nhân viên: </label>
			<input type="text" id="MaNhanVien" name="MaNhanVien" class="form-control" value="{{$NhanVien->id}}" readonly />
		</div>
		<div class="form-group">
			<label for="HoVaTen">Họ và tên: </label>
			<input type="text" id="HoVaTen" name="HoVaTen" class="form-control" value="{{$NhanVien->HoVaTen}}" />
		</div>
		<div class="form-group">
			<label for="Role">Role: </label>
			<select onchange="changeFunc();" id="Role" name="Role" class="form-control">
				<option value="QuanLy">Quản lý</option>
				<option value="ThuNgan">Thu Ngân</option>
				<option value="PhucVu">Phục vụ</option>
			</select>
		</div>
		<div class="form-group">
			<label for="GioiTinh">Giới tính: </label>
			<select id="GioiTinh" name="GioiTinh" class="form-control">
				<option value="Nam">Nam</option>
				<option value="Nữ">Nữ</option>
				<option value="Khác">Khác</option>
			</select>
		</div>
		<div class="form-group">
			<label for="DiaChi">Địa chỉ: </label>
			<input type="text" id="DiaChi" name="DiaChi" class="form-control" value="{{$NhanVien->DiaChi}}" />
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại: </label>
			<input type="text" id="SoDienThoai" name="SoDienThoai" class="form-control" value="{{$NhanVien->SoDienThoai}}" />
		</div>
		<div class="form-group">
			<label for="CMND">Chứng minh nhân dân: </label>
			<input type="text" id="CMND" name="CMND" class="form-control" value="{{$NhanVien->CMND}}" />
		</div>
		<div class="form-group">
			<label for="Email">Email: </label>
			<input type="text" id="Email" name="Email" class="form-control" value="{{$NhanVien->Email}}" />
		</div>
		<div class="form-group" id="Field_password">
			<label for="password">Mật khẩu: </label>
			<input type="text" id="password" name="password" class="form-control" value="{{$NhanVien->password}}" />
		</div>
		<div class="form-group">
			<label for="LuongTheoGio">Lương theo giờ: </label>
			<input type="text" id="LuongTheoGio" name="LuongTheoGio" class="form-control" value="{{$NhanVien->LuongTheoGio}}" />
		</div>
		<div class="form-group">
			<button class="btn btn-info" type="submit">Cập nhật</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
<script>
	var div = document.getElementById("dom-target");
	var Role = parseInt(div.textContent);
	$("#Role").val($("#Role option:eq(" + Role + ")").val());
	if (Role == "2") {
		var matkhau_status = document.getElementById("Field_password");
		matkhau_status.style.display = "none";
	}

	function changeFunc() {
		var matkhau_status = document.getElementById("Field_password");
		var role_value = document.getElementById("Role").value;
		if (role_value == "PhucVu") {
			matkhau_status.style.display = "none";
		} else {
			matkhau_status.style.display = "block";
		}
	}
</script>
@endsection