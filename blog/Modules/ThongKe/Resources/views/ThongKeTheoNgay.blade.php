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
<div class="container">
	<h1 style="text-align: center;">Hóa đơn nguyên liệu</h1>
	<form class="thongketheongay" action="{{route('thongketheongay')}}" method="GET">
		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
					Từ ngày:<input class="day_from form-control" type="text" id="date_from" name="date_from" autocomplete="off">
				</div>
				<div class="col-md-4">
					Đến ngày:<input class="day_to form-control" type="text" id="date_to" name="date_to" autocomplete="off">
				</div>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-4">
				<label for="NguoiLap">Người lập:</label>
				<select class="form-control" id="nhanVien" name="nhanvien">
					<option value="-1">Tất cả</option>
					@foreach ($NhanViens as $NhanVien)
					<option value="{{$NhanVien->id}}" {{($nhanVienFilter == $NhanVien->id) ? 'selected' : ''}}>{{$NhanVien->HoVaTen}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<button class="btn btn-success" style="width:120px;margin-top:32px; color:#fff;">Thống kê</a>
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
							<th>Mã hóa đơn</th>
							<th>Người nhập</th>
							<th>Thời gian</th>
							<th>Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						@foreach($HoaDons as $HoaDon)
						<tr>
							<td>{{$HoaDon->id}}</td>
							<td>{{$HoaDon->NhanVien->HoVaTen}}</td>
							<td>{{date("d-m-Y H:i",strtotime($HoaDon->created_at))}}</td>
							<td>
								{{$HoaDon->TongTien}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<h1 style="text-align: center;margin-bottom:20px;">Hóa đơn gọi món</h1>
	<div class="form-group row">
		<div class="col-md-4">
			<label for="ThoiGian">Người lập:</label>
			<select class="form-control">
				<option value="#">Quản lý</option>
				<option value="#">Thu ngân</option>
			</select>
		</div>
		<div class="col-md-4">
			<a class="btn btn-success xuatpdf" style="width:120px;margin-top:32px; color:#fff;">Tìm kiếm</a>
		</div>
	</div>
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
		</div>
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
					<tbody>

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
	<script type="text/javascript">
		$('.day_from').datepicker({

			format: "dd-mm-yyyy",
		});

		$('.day_to').datepicker({

			format: "dd-mm-yyyy",
		});
	</script>
	@endsection