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
		<input type="text" id="TongThu" name="TongThu" class="form-control" readonly />
		<label for="TongChi">Tổng chi: </label>
		<input type="text" id="TongChi" name="TongChi" class="form-control" readonly />
		<label for="TongDoanhThu">Doanh Thu: </label>
		<input type="text" id="TongDoanhThu" name="TongDoanhThu" class="form-control" readonly />
	</div>
	<div align="right" style="margin-top:10px;margin-bottom:10px;">
		<a class="btn btn-success xuatpdf" style="width:120px; color:#fff;">Xuất PDF</a>
	</div>
</div>
<script type="text/javascript">
	$('.day_from').datepicker({

		format: "dd-mm-yyyy",
	});

	$('.day_to').datepicker({

		format: "dd-mm-yyyy",
	});
</script>
@endsection