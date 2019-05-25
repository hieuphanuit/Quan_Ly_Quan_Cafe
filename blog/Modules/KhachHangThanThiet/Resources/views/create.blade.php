@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Khách hàng</a>
  </li>
  <li class="breadcrumb-item active">Thêm khách hàng thân thiết</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thêm khách hàng thân thiết</h1>
<div class="container">
	<form class="themkhachhang" action="{{route('khachhangthanthiet.store')}}" method="POST">
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
			<label for="Email">Email: </label>
			<input type="text" id="Email" name="Email"  class="form-control"/>
		</div>
		<div class="form-group">
				<button class="btn btn-info" type="submit">Thêm</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
@endsection

