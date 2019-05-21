@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
   <li class="breadcrumb-item">
    <a href="#">Nhân viên</a>
  </li>
  <li class="breadcrumb-item active">Thêm nhân viên</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thêm nhân viên</h1>
<div class="container">
	<form class="themnhanvien">
		<div class="form-group">
			<label for="MaNhanVien">Mã số nhân viên: </label>
			<input type="text" id="MaNhanVien" name="MaNhanVien"  class="form-control" readonly/>
		</div>
		<div class="form-group">
			<label for="HoVaTen">Họ và tên: </label>
			<input type="text" id="HoVaTen" name="HoVaTen"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="Role">Role: </label>
			<input type="text" id="Role" name="Role"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="GioiTinh">Giới tính: </label>
			<input type="text" id="GioiTinh" name="GioiTinh"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="DiaChi">Địa chỉ: </label>
			<input type="text" id="DiaChi" name="DiaChi"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại: </label>
			<input type="text" id="SoDienThoai" name="SoDienThoai"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="CMND">Chứng minh nhân dân: </label>
			<input type="text" id="CMND" name="CMND"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="MaNhanVien">Mã số nhân viên: </label>
			<input type="text" id="MaNhanVien" name="MaNhanVien"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="Email">Email: </label>
			<input type="text" id="Email" name="Email"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="MatKhau">Mật khẩu: </label>
			<input type="text" id="MatKhau" name="MatKhau"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="LuongTheoGio">Lương theo giờ: </label>
			<input type="text" id="LuongTheoGio" name="LuongTheoGio"  class="form-control" />
		</div>
		<div class="form-group">
				<button class="btn btn-info" type="submit">Thêm</button>
		</div>
	</form>
</div>
@endsection

