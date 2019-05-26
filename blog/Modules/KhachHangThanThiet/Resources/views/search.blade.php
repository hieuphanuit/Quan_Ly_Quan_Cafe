@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{url('/khachhangthanthiet')}}">Khách hàng</a>
  </li>
  <li class="breadcrumb-item active">Tìm kiếm</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Kết quả tìm kiếm</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success"href="{{url('/khachhangthanthiet')}}">Danh sách</a>
</div>

    <form action="{{url('/khachhangthanthiet/search')}}" id="search-form" method="POST">
		<div class="form-group row">
			<div class="col-md-4">
				<label for="timkiem_hovaten">Họ và tên khách hàng:</label>
				<input class="form-control" id="timkiem_hovaten" type="text" name="timkiem_hovaten" value="{{$HoVaTen}}">
			</div>
			<div class="col-md-4">
				<label for="timkiem_sdt">Số điện thoại:</label>
				<input class="form-control" type="tel" id= "timkiem_sdt" name="timkiem_sdt"  value="{{$SoDienThoai}}">
			</div>
			<div class="col-md-4">
				<button class="btn btn-success" id="timkiemhoinghi_button" style="width: 120px; margin-top:31px;"><b>Tìm kiếm</b></button>
			</div>
			{!! csrf_field() !!}
		</div>
    </form>

<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
	</div>
  <div class="card-body">
    <div>
      <table class="table table-bordered dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Mã khách hàng</th>
            <th>Họ và tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th width="30%">Hành Động</th>
          </tr>
        </thead>
        <tbody>
		  @foreach ($KhachHangThanThiets as $KhachHangThanThiet)
          <tr>
            <td>{{$KhachHangThanThiet->id}}</td>
            <td>{{$KhachHangThanThiet->HoVaTen}}</td>
            <td>{{$KhachHangThanThiet->DiaChi}}</td>
            <td>{{$KhachHangThanThiet->SoDienThoai}}</td>
            <td>
				<div class="row">
					<div class="col-md-4 hanhdong">
						<a href ="/khachhangthanthiet/{{$KhachHangThanThiet->id}}/edit"class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4 hanhdong">
						<a href ="/khachhangthanthiet/{{$KhachHangThanThiet->id}}" class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4 hanhdong">
						<form method="POST" action='{{url("/khachhangthanthiet/$KhachHangThanThiet->id/delete")}}' style="display: inline-block">
								<input type="hidden" value="$user->id" name="delete_user" />
								<button onclick="return confirm('Bạn có chắc muốn xóa khách hàng này không?')" class="btn btn-danger" style="width:80px;">
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

