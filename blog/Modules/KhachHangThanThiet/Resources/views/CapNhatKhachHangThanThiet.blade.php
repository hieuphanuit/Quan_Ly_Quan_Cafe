@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Khách hàng</a>
  </li>
  <li class="breadcrumb-item active">Cập nhật khách hàng thân thiết</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Cập nhật khách hàng thân thiết</h1>
<div class="container">
	<form class="themkhachhang">
		<div class="form-group">
			<label for="MaKhachHang">Mã khách hàng: </label>
			<input type="text" id="MaKhachHang" name="MaKhachHang"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="HoVaTen">Họ và tên: </label>
			<input type="text" id="HoVaTen" name="HoVaTen"  class="form-control"/>
		</div>
		<div>
			<label for="DiaChi">Địa chỉ: </label>
			<input type="text" id="DiaChi" name="DiaChi"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại: </label>
			<input type="text" id="SoDienThoai" name="SoDienThoai"  class="form-control"/>
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
			<label for="TrangThai">Trạng thái: </label>
			<input type="text" id="TrangThai" name="TrangThai"  class="form-control"/>
		</div>
		<div class="form-group">
				<button class="btn btn-info" type="submit">Cập nhật</button>
		</div>
	</form>
</div>
@endsection

