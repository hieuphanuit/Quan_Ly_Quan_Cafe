@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Hóa đơn</a>
	</li>
	<li class="breadcrumb-item active">Danh sách hóa đơn gọi món</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Danh sách hóa đơn gọi món</h1>
<div class="col-md-5" style="padding-bottom:20px;">
	<a class="btn btn-success" href="{{url('/hoadongoimon/themhoadongoimon')}}">Thêm hóa đơn gọi món</a>
</div>
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
						<th>Người lập</th>
						<th>Khách hàng</th>
						<th>Tổng tiền</th>
						<th width="30%">Hành Động</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach ($HoaDonGoiMons as $HoaDonGoiMon)
					<tr>
						<td>{{$HoaDonGoiMon->id}}</td>
						<td>{{$HoaDonGoiMon->id}}</td>
						@if ($HoaDonGoiMon->MaKhachHang !=0)
						<td>{{$HoaDonGoiMon->KhachHangThanThiet->HoVaTen}}</td>
						@else 
							<td>Không có trong danh sách khách hàng thân thiết</td>
						@endif
						<td>{{$HoaDonGoiMon->TongTien}}</td>
						<td>
							<div class="row">
								<div class="col-md-4 hanhdong">
									<a href='{{url("/hoadongoimon/$HoaDonGoiMon->id/edit")}}' class="btn btn-info" style="width:80px;">Sửa</a>
								</div>
								<div class="col-md-4 hanhdong">
									<a href='{{url("/hoadongoimon/$HoaDonGoiMon->id")}}' class="btn btn-warning" style="width:80px; color: white">Chi tiết</a>
								</div>
								<div class="col-md-4 hanhdong">
									<form method="POST" action='{{url("/hoadongoimon/$HoaDonGoiMon->id/delete")}}' style="display: inline-block">
										<input type="hidden" value="$user->id" name="delete_hoadon" />
										<button onclick="return confirm('Bạn có chắc muốn xóa hóa đơn này không?')" class="btn btn-danger" style="width:80px;">
											Xóa
										</button>
										{!! csrf_field() !!}
									</form>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div>
				{{ $HoaDonGoiMons->links() }}
			</div>
		</div>
	</div>
	@endsection