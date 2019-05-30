@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Hóa đơn</a>
	</li>
	<li class="breadcrumb-item active">Thêm hóa đơn gọi món</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align:center;">Thêm hóa đơn gọi món</h1>
<div class="container">
	<table class="table">
		<thead>
			<tr>

				<th scope="col" width="30%">Tên món</th>
				<th scope="col" width="10%">Đơn giá</th>
				<th scope="col" width="10%">Thành tiền</th>
			</tr>
		</thead>
		<tbody>
			@foreach($ThucDons as $ThucDon)
			<tr>

				<td>
					<button class="btn btn-info thucDon_btn" style="width:80%" data-id="{{$ThucDon->TenMon}}">{{$ThucDon->TenMon}}</button>
				</td>
				<td data-id="$ThucDon->id" >{{$ThucDon->DonGia}}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div style="height: 30vh">
	</div>
	<div class="themHoaDonGoiMon">
		<table class="table chiTietHoaDon">
			<thead>
				<tr>

					<th scope="col" width="30%">Tên món</th>
					<th scope="col" width="10%" style="padding-left: 30px;">Số lượng</th>
					<th scope="col" width="10%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<tr>

					<td>Món 1</td>
					<td>
						<div class="row">
							<div>
								<button class="btn btn-warning subtract-btn">-</button>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="number" name="soLuong" />
							</div>
							<div>
								<button class="btn btn-success plus-btn">+</button>
							</div>
						</div>
					</td>
					<td>
						<div>
							<button class="btn btn-danger plus-btn">x</button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<script>
	$(".thucDon_btn").click(function() {
		var tenMon = $(this).data('id');
		$(".chiTietHoaDon").each(function() {
			var tds = '<tr>';
			tds += '<td>' +tenMon+ '</td>';
			tds += '<td>';
			tds += '<div class="row">';
			tds += '<div>'+'<button class="btn btn-warning subtract-btn">-</button>'+'</div>';
			tds += '<div class="col-md-4">'+'<input class="form-control" type="number" name="soLuong" />'+'</div>';
			tds += '<div>'+'<button class="btn btn-success plus-btn">+</button>'+'</div>';
			tds += '</div>';
			tds += '</td>';
			tds += '<td><div>'+'<button class="btn btn-danger plus-btn">x</button>'+'</div>';
			tds += '</tr>';
			if ($('tbody', this).length > 0) {
				$('tbody', this).append(tds);
			} else {
				$(this).append(tds);
			}
		});	
	});
</script>
@endsection