@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href='{{url("/nhanvien")}}'>Nhân viên</a>
  </li>
  <li class="breadcrumb-item active">Danh sách nhân viên</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Danh sách nhân viên</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success" href='{{url("/nhanvien/create")}}'>Thêm nhân viên</a>
</div>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered dataTable"width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Mã nhân viên</th>
            <th>Họ và tên</th>
            <th width="30%">Địa chỉ</th>
            <th>CMND</th>
            <th>Lương</th>
            <th width="30%">Hành Động</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Mã nhân viên</th>
            <th>Họ và tên</th>
            <th>Địa chỉ</th>
            <th>CMND</th>
            <th>Lương</th>
            <th>Hành Động</th>
          </tr>
        </tfoot>
        <tbody>
			@foreach ($NhanViens as $NhanVien)
          <tr>		
            <td>{{$NhanVien->id}}</td>
            <td>{{$NhanVien->HoVaTen}}</td>
            <td>{{$NhanVien->DiaChi}}</td>
            <td>{{$NhanVien->CMND}}</td>
            <td>{{$NhanVien->LuongTheoGio}}</td>
            <td>
				<div class="row">
					<div class="col-md-4 hanhdong">
						<a href='{{url("/nhanvien/$NhanVien->id/edit")}}' class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4 hanhdong">
						<a href='{{url("/nhanvien/$NhanVien->id")}}' class="btn btn-warning"style="width:80px; color: white;">Chi tiết</a>
					</div>
					<div class="col-md-4 hanhdong">
						<form method="POST" action='{{url("/nhanvien/$NhanVien->id/delete")}}' style="display: inline-block">
								<input type="hidden" value="$NhanVien->id" name="delete_nhanvien" />
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
      </table>
    </div>
  </div>
@endsection
