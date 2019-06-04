@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Thống kê</a>
	</li>
	<li class="breadcrumb-item active">Thống kê theo ngày</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thống kê theo ngày</h1>
<h2 style="text-align: center;margin-bottom:20px;">Hóa đơn nguyên liệu</h2>
<div class="container">
	<form class="thongketheongay" action="{{route('thongketheongay')}}" method="GET">
		<div class="form-group row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="date">Từ ngày: </label>
					<input class="form-control from_date" id="from_date" name="from_date" autocomplete="off" />
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="date">Đến ngày: </label>
					<input class="form-control to_date" id="to_date" name="to_date" autocomplete="off" />
				</div>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-4">
				<button class="btn btn-success" style="width:120px;margin-top:32px; color:#fff;">Thống kê</button>
			</div>
		</div>
</div>
{!! csrf_field() !!}
</form>
<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Ngày</th>
						<th>Tổng số hóa đơn</th>
						<th>Tổng tiền</th>
					</tr>
				</thead>
				<tbody>
					@foreach($HoaDonNguyenLieus as $HoaDonNguyenLieu)
					<tr>
						<td>{{$HoaDonNguyenLieu->date}}</td>
						<td>{{$HoaDonNguyenLieu->TongSoHoaDon}}</td>
						<td>
							{{$HoaDonNguyenLieu->TongTien}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<h2 style="text-align: center;margin-bottom:20px;">Hóa đơn gọi món</h2>

<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Ngày</th>
						<th>Tổng số hóa đơn</th>
						<th>Tổng tiền</th>
					</tr>
				</thead>
				<tbody>
					@foreach($HoaDonGoiMons as $HoaDonGoiMon)
					<tr>
						<td>{{$HoaDonGoiMon->date}}</td>
						<td>{{$HoaDonGoiMon->TongSoHoaDon}}</td>
						<td>
							{{$HoaDonGoiMon->TongTien}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="form-group">
	<label for="TongThu">Tổng thu: </label>
	<input type="text" id="TongThu" name="TongThu" class="form-control" value="{{$TongThu}}" readonly />
	<label for="TongChi">Tổng chi: </label>
	<input type="text" id="TongChi" name="TongChi" class="form-control" value="{{$TongChi}}" readonly />
	<label for="TongDoanhThu">Doanh Thu: </label>
	<input type="text" id="TongDoanhThu" name="TongDoanhThu" class="form-control" value="{{$DoanhThu}}" readonly />
</div>
<form class="thongketheongay" action="{{route('thongketheongay.create')}}" method="GET">
	<div style="margin-top:10px;margin-bottom:10px;">
		<input type="hidden" name="from_date" value="{{$fromdateFilter}}">
		<input type="hidden" name="to_date" value="{{$todateFilter}}">
		<button class="btn btn-success xuatpdf" type="submit" style="width:120px; color:#fff;">Xuất PDF</button>
	</div>
	{!! csrf_field() !!}
</form>
<script type="text/javascript">
	$('.from_date').datepicker({

		format: "dd-mm-yyyy",
	});

	$('.to_date').datepicker({

		format: "dd-mm-yyyy",
	});
</script>
@endsection