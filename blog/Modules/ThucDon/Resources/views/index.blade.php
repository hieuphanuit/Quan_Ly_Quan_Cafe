@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href='{{url("/thucdon")}}'>Thực đơn</a>
  </li>
  <li class="breadcrumb-item active">Danh sách thực đơn</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align:center;">Danh sách thực đơn</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success" href='{{url("/thucdon/create")}}'>Thêm thực đơn</a>
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
            <th>Mã món</th>
            <th>Tên món</th>
            <th>Đơn giá</th>
            <th>Hành Động</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
			<th>Mã món</th>
            <th>Tên món</th>
            <th>Đơn giá</th>
            <th width="30%">Hành Động</th>
          </tr>
        </tfoot>
        <tbody>
		@foreach ($ThucDons as $ThucDon)
          <tr>
            <td>{{$ThucDon->id}}</td>
            <td>{{$ThucDon->TenMon}}</td>
            <td>{{$ThucDon->DonGia}}</td>
            <td>
				<div class="row">
					<div class="col-md-4 hanhdong">
						<a href='{{url("/thucdon/$ThucDon->id/edit")}}' class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4 hanhdong">
						<a href='{{url("/thucdon/$ThucDon->id")}}' class="btn btn-warning"style="width:80px; color: #fff;">Chi tiết</a>
					</div>
					<div class="col-md-4 hanhdong">
						<form method="POST" action='{{url("/thucdon/$ThucDon->id/delete")}}' style="display: inline-block">
								<input type="hidden" value="$ThucDon->id" name="delete_thucdon" />
								<button onclick="return confirm('Bạn có chắc muốn xóa nhân viên này không?')" class="btn btn-danger" style="width:80px;">
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
    </div>
  </div>
@endsection