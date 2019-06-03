@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Thống kê</a>
	</li>
	<li class="breadcrumb-item active">Tìm kiếm theo ca</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Tìm kiếm theo ca</h1>
<div class="container">
	<form class="thongketheoca" action="{{route('thongketheoca.search')}}" method="GET">
		<div class="form-group">
			<label for="ThoiGian">Ca: </label>
			<select class="form-control" id="ca_timkiem" name="ca_timkiem">
				<option value="1">Sáng</option>
				<option value="2">Chiều</option>
				<option value="3">Tối</option>
			</select>
		</div>
		<div class="form-group row">
			<div class="col-md-4">
				<label for="ThoiGian">Người lập:</label>
				<select class="form-control" id="nhanvien_timkiem" name="nhanvien_timkiem">
					@foreach ($NhanViens as $NhanVien)
					<option value="{{$NhanVien->id}}">{{$NhanVien->HoVaTen}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<label for="ThoiGian">Món:</label>
				<select class="form-control" id="mon_timkiem" name="mon_timkiem">
					@foreach($ThucDons as $ThucDon)
					<option value="{{$ThucDon->id}}">{{$ThucDon->TenMon}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<a class="btn btn-success xuatpdf" style="width:120px;margin-top:32px; color:#fff;">Tìm kiếm</a>
			</div>
		</div>
		{!! csrf_field() !!}
	</form>

	<div class="card mb-3">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Mã hóa đơn</th>
							<th>Người nhập</th>
							<th>Thời gian</th>
							<th>Thành tiền</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Mã hóa đơn</th>
							<th>Người nhập</th>
							<th>Thời gian</th>
							<th>Thành tiền</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Airi Satou</td>
							<td>Cái</td>
							<td>33</td>
							<td>
								123
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="TongThu">Tổng thu: </label>
		<input type="text" id="TongThu" name="TongThu" class="form-control" readonly />
	</div>
	<form class="thongketheoca" action="{{route('thongketheoca.create')}}" method="GET">
		<div style="margin-top:10px;margin-bottom:10px;">
			<button class="btn btn-success xuatpdf" type="submit" style="width:120px; color:#fff;">Xuất PDF</button>
		</div>
		{!! csrf_field() !!}
	</form>
	@endsection