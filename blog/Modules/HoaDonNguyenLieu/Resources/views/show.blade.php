@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href='{{url("/thucdon")}}'>Thực đơn</a>
  </li>
  <li class="breadcrumb-item active">Thông tin thực đơn</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thông tin thực đơn</h1>
<div class="container">
	<?php var_dump($hoaDonNguyenLieu)?>
</div>
@endsection