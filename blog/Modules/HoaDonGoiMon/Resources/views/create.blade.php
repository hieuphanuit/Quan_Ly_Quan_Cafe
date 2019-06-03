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
<div class="form-group">
	<label for="Khách hàng">Khách hàng thân thiết: </label>
	<select onchange="changeFunc();" id="KhachHangThanThiet" name="KhachHangThanThiet" class="form-control">
		<option value="0">Khác</option>
		@foreach($KhachHangThanThiets as $KhachHangThanThiet)
		<option value="{{$KhachHangThanThiet->id}}">{{$KhachHangThanThiet->HoVaTen}}</option>
		@endforeach
	</select>
</div>
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
					<button class="btn btn-info thucDon_btn" style="width:80%" data-id="{{$ThucDon->id}}" data-mon="{{$ThucDon->TenMon}}">{{$ThucDon->TenMon}}</button>
				</td>
				<td data-id="$ThucDon->id">{{$ThucDon->DonGia}}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div style="height: 30vh">
	</div>
	<div class="themHoaDonGoiMon">
		<form class="themhoadongoimon" action="{{url('/hoadongoimon')}}" method="POST" style="display: inline-block">
			<table class="table chiTietHoaDon " id="chiTietHoaDon">
				<thead>
					<tr>

						<th scope="col" width="30%">Tên món</th>
						<th scope="col" width="10%" style="padding-left: 30px;">Số lượng</th>
						<th scope="col" width="10%">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					</tr>
				</tbody>
			</table>
			<div>
				<button class="btn btn-success" style="width:80px; position: absolute; right: 0; margin-right:20px;">
					Lưu
				</button>
				{!! csrf_field() !!}
		</form>
	</div>
</div>

</div>
<script>
	var khachhang = 0;

	function changeFunc() {
		khachhang = document.getElementById("KhachHangThanThiet").value;
		var buttons = document.querySelectorAll("#kh");
		for (var i = 0; i < buttons.length; i++) {
			buttons[i].value = khachhang;
		}
	};
	$(document).ready(function() {
		$(".thucDon_btn").on("click", function() {
			var id = $(this).data('id');
			var mon = $(this).data('mon');
			var kh = khachhang;
			if ($('.child-selection[data-id="' + $(this).data('id') + '"]').length) {
				var data = 1;
				data += parseInt($('.child-selection[data-id="' + $(this).data('id') + '"]').val());
				console.log ($('.child-selection[data-id="' + $(this).data('id') + '"]'));
				$('.child-selection[data-id="' + $(this).data('id') + '"]').val(data);
				var buttons = document.querySelectorAll("#kh");
				for (var i = 0; i < buttons.length; i++) {
					buttons[i].value = khachhang;
				}
			} else {
				var inputfield = "<tr>" +
					"<td>" + mon + "</td>" +
					"<td>" +
					"<div class='row'>" +
					"<div>" +
					"<button class='btn btn-warning subtract-btn' data-id='" + id + "'>-</button>" +
					"</div>" +
					"<div class='col-md-4'>" +
					"<input class='child-selection form-control counter' id='counter" + id + "'style='width:60px;' type='number' data-id='" + id + "' value='1' name='quantity[]'/>" +
					"<input type='hidden' name='monSelected[]' value='" + id + "'>" +
					"</div>" +
					"<div>" +
					"<button class='btn btn-success plus-btn' data-id='" + id + "'>+</button>" +
					"</div>" +
					"</div>" +
					"</td>" +
					"<td>" +
					"<div>" +
					"<button class='btn btn-danger delete-btn'>x</button>" +
					"</div>" +
					"</td>" +
					"</tr>" +
					"<input type='hidden'name='kh'  id='kh' value='" + kh + "'>";
				$('#chiTietHoaDon').append(inputfield);
			}
		});
		$("#chiTietHoaDon").on("click", ".plus-btn", function() {
			var id = $(this).data('id');
			var $counter = $('#counter' + id);
			$counter.val(parseInt($counter.val()) + 1);
		}).on("click", ".subtract-btn", function() {
			var id = $(this).data('id');
			var $counter = $('#counter' + id);
			if ($counter.val() > 1) {
				$counter.val(parseInt($counter.val()) - 1);
			}
		}).on("click", ".delete-btn", function() {
			$(this).closest('tr').remove();
		});
	});
</script>
@endsection