@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Hóa đơn</a>
	</li>
	<li class="breadcrumb-item active">Chi tiết hóa đơn gọi món</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Chi tiết hóa đơn gọi món</h1>
<form class="hoadongoimon">
	<div class="form-group">
		<label for="NhanVien">Nhân viên: </label>
		<input type="text" value="{{$HoaDonGoiMon->NguoiLap->HoVaTen}}" readonly class="form-control" />
	</div>
	@if ($HoaDonGoiMon->MaKhachHang !=0)
	<div class="form-group">
		<label for="KhachHangThanThiet">Khách hàng: </label>
		<input type="text" value="{{$KhachHangThanThiet->HoVaTen}}" readonly class="form-control" />
	</div>
	@else
	<div class="form-group">
		<label for="KhachHangThanThiet">Khách hàng: </label>
		<input type="text" value="Không có" readonly class="form-control" />
	</div>
	@endif
	<div class="form-group">
		<label for="TongTien">Tổng tiền: </label>
		<input type="text" value="{{$HoaDonGoiMon->TongTien}}" readonly class="form-control" />
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
						<th>Tên món</th>
						<th>Số lượng</th>
						<th>Đơn giá</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach ($ChiTietHoaDonGoiMons as $ChiTietHoaDonGoiMon)
					<tr>
						<td>{{$ChiTietHoaDonGoiMon->ThucDon->TenMon}}</td>
						<td>{{$ChiTietHoaDonGoiMon->SoLuong}}</td>
						<td>{{$ChiTietHoaDonGoiMon->ThucDon->DonGia}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div>
			</div>
		</div>
	</div>
	@endsection