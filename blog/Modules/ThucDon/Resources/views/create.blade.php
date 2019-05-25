@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Thực đơn</a>
  </li>
  <li class="breadcrumb-item active">Thêm thực đơn</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thêm thực đơn</h1>
<div class="container">
	<form class="themthucdon" action="{{route('thucdon.store')}}" method="POST">
		<div class="form-group">
			<label for="TenMon">Tên món: </label>
			<input type="text" id="TenMon" name="TenMon"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="DonGia">Đơn giá: </label>
			<input type="text" id="DonGia" name="DonGia"  class="form-control"/>
		</div>
		<div class="form-group">
				<button class="btn btn-info" type="submit">Thêm</button>
		</div>
		{!! csrf_field() !!}
	</form>
</div>
@endsection