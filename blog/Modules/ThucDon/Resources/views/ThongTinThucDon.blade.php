@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="#">Thực đơn</a>
  </li>
  <li class="breadcrumb-item active">Thông tin thực đơn</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thông tin thực đơn</h1>
<div class="container">
	<form class="themthucdon">
		<div class="form-group">
			<label for="MaMon">Mã món: </label>
			<input type="text" id="MaMon" name="MaMon"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TenMon">Tên món: </label>
			<input type="text" id="TenMon" name="TenMon"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="DonGia">Đơn giá: </label>
			<input type="text" id="DonGia" name="DonGia"  class="form-control"/>
		</div>
	</form>
</div>
@endsection