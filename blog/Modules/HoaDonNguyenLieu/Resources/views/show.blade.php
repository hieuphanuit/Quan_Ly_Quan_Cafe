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
<form class="hoadonnguyenlieu">
	<div class="form-group">
		<label for="NhanVien">Nhân viên: </label>
		<input type="text" value="{{$hoaDonNguyenLieu->NhanVien->HoVaTen}}" readonly class="form-control" />
	</div>
	<div class="form-group">
		<label for="TongTien">Tổng tiền: </label>
		<input type="text" value="{{$hoaDonNguyenLieu->TongTien}}" readonly class="form-control" />
	</div>
</form>
<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
	</div>
	<div class="card-body">
		<div class="">
			<table class="table table-bordered dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Mã hóa đơn</th>
						<th>Tên món</th>
						<th>Số lượng</th>
						<th>Đơn giá</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach ($hoaDonNguyenLieu->ChiTietHoaDonNguyenLieu as $ChiTietHoaDonNguyenLieu)
					<tr>
						<td>{{$ChiTietHoaDonNguyenLieu->id}}</td>
            <td>{{$ChiTietHoaDonNguyenLieu->NguyenLieu->TenNguyenLieu}}</td>
            <td>{{$ChiTietHoaDonNguyenLieu->SoLuong}}</td>
            <td>{{$ChiTietHoaDonNguyenLieu->DonGia}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div>
			</div>
    </div>

	</div>
	@endsection
