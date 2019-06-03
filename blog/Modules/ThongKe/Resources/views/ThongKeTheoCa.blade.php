@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Thống kê</a>
	</li>
	<li class="breadcrumb-item active">Thống kê theo ca</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thống kê theo ca</h1>
<div class="container">
	<form class="thongketheoca" action="{{route('thongketheoca')}}" method="GET">
		<div class="form-group">
			<label for="date">Ngày: </label>
			<input class="form-control" id="date" name="date" autocomplete="off" />
		</div>
		<div class="form-group">
			<label for="ca">Ca: </label>
			<select class="form-control" id="ca" name="ca">
				<option value="sang" {{$caFilter == 'sang' ? 'selected' : ''}}>Sáng</option>
				<option value="chieu" {{$caFilter == 'chieu' ? 'selected' : ''}}>Chiều</option>
				<option value="toi" {{$caFilter == 'toi' ? 'selected' : ''}}>Tối</option>
			</select>
		</div>
		<div class="form-group row">
			<div class="col-md-4">
				<label for="nhanvien">Người lập:</label>
				<select class="form-control" id="nhanVien" name="nhanvien">
					<option value="-1" >Tất cả</option>
						@foreach ($NhanViens as $NhanVien)
					<option value="{{$NhanVien->id}}" {{($nhanVienFilter == $NhanVien->id) ? 'selected' : ''}}>{{$NhanVien->HoVaTen}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<button class="btn btn-success" style="width:120px;margin-top:32px; color:#fff;">Thống kê</button>
			</div>
		</div>
		{!! csrf_field() !!}
	</form>

	@if($HoaDons)
	<div class="card mb-3">
		<div class="card-body">
			<div class="table-responsive">
				<table id="table" class="table table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Mã hóa đơn</th>
							<th>Người lập</th>
							<th>Thời gian</th>
							<th>Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						@foreach($HoaDons as $HoaDon)
						<tr>
							<td>{{$HoaDon->id}}</td>
							<td>{{$HoaDon->NguoiLap->HoVaTen}}</td>
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
	<div class="form-group">
		<label for="TongThu">Tổng thu: </label>
		<input type="text" id="TongThu" class="form-control" value="{{$TongThu}}" readonly />
	</div>
	<form class="thongketheoca" action="{{route('thongketheoca.create')}}" method="GET">
		<div style="margin-top:10px;margin-bottom:10px;">
			<input type="hidden" name="date" value="{{$dateFilter}}">
			<input type="hidden" name="ca" value="{{$caFilter}}">
			<input type="hidden" name="nhanVien" value="{{$nhanVienFilter}}">
			<button class="btn btn-success xuatpdf" type="submit" style="width:120px; color:#fff;">Xuất PDF</button>
		</div>
		{!! csrf_field() !!}
	</form>
	@endif
	<script type="text/javascript">
	{{ $dateFilter ? "var date = new Date(".(strtotime($dateFilter) * 1000).");" : "var date = new Date();" }}
		
		var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

		$('#date').datepicker({
			format: "dd-mm-yyyy",
			endDate: new Date(),
			todayHighlight: true
		});
		$('#date').datepicker('setDate', today);
	</script>

	@section('dataTable')
	<script>
		$(document).ready(function() {
			$('#table').DataTable({

			});
		});
	</script>
	@endsection
@endsection