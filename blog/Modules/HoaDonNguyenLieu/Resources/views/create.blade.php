@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Hóa đơn</a>
	</li>
	<li class="breadcrumb-item active">Thêm hóa đơn nguyên liệu</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align:center;">Thêm hóa đơn nguyên liệu</h1>
<div class="container">
	<table class="table">
		<thead>
			<tr>

				<th scope="col" width="30%">Tên món</th>
				<th scope="col" width="10%">Đơn giá</th>
				<th scope="col" width="10%">Số lượng tồn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($NguyenLieus as $NguyenLieu)
			<tr>

				<td>
					<button class="btn btn-info nguyenLieu_btn" style="width:80%" data-id="{{$NguyenLieu->id}}" data-mon="{{$NguyenLieu->TenNguyenLieu}}" data-slt="{{$NguyenLieu->SoLuongTon}}">{{$NguyenLieu->TenNguyenLieu}}</button>
				</td>
				<td data-id="$NguyenLieu->id">{{$NguyenLieu->GiaUocLuong}}</td>
				<td>{{$NguyenLieu->SoLuongTon}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div style="height: 30vh">
	</div>
	<div class="themHoaDonGoiMon">
		<form style="display: inline-block" action="{{url('/hoadonnguyenlieu')}}" method="POST">
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
			</div>
		</form>
	</div>

</div>
<script>
	$(document).ready(function() {
		$(".nguyenLieu_btn").on("click", function() {
			var id = $(this).data('id');
			var mon = $(this).data('mon');
			var slt = $(this).data('slt');
			var cur_val = $('#counter' + id).val();
			if (cur_val == null)
				cur_val = 0;
			cur_val = parseInt(cur_val);
			if ($('.child-selection[data-id="' + $(this).data('id') + '"]').length) {
				var data = 1;
				if (cur_val < slt) {
					data += parseInt($('.child-selection[data-id="' + $(this).data('id') + '"]').val());
					$('.child-selection[data-id="' + $(this).data('id') + '"]').val(data);
				}
			} else {
				var inputfield = "<tr><td>" + mon + "</td>"
											+"<td>"
												+"<div class='row'>"
													+"<div>"
														+"<button type='button' class='btn btn-warning subtract-btn' data-id='" + id + "'>-</button>"
													+"</div>"
													+"<div class='col-md-4'>"
														+"<input class='child-selection form-control counter' id='counter" + id + "'style='width:60px;' type='number' data-id='" + id + "' data-slt='" + slt + "' value='1' name='quantity[]'/>"
														+"<input type='hidden' name='monSelected[]' value='"+id+"'>"
													+"</div>"
													+"<div>"
														+"<button type='button' class='btn btn-success plus-btn' data-id='" + id + "' data-slt='" + slt + "'>+</button>"
													+"</div>"
												+"</div>"
											+"</td>"
											+"<td><div><button class='btn btn-danger delete-btn'>x</button></div></td></tr>";
				$('#chiTietHoaDon').append(inputfield);
			}
		});
		$("#chiTietHoaDon").on("click", ".plus-btn", function() {
			var id = $(this).data('id');
			var slt = $(this).data('slt');
			var $counter = $('#counter' + id);
			if ($counter.val() < slt) {
				$counter.val(parseInt($counter.val()) + 1);
			};
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