@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Khách hàng</a>
  </li>
  <li class="breadcrumb-item active">Danh sách khách hàng</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Danh sách khách hàng thân thiết</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success"href="/khachhangthanthiet/themkhachhang">Thêm khách hàng</a>
</div>
<div class="form-group row">
	<div class="col-md-4">
		<label for="timkiem_hovaten">Họ và tên khách hàng:</label>
		<input class="form-control" id="timkiem_hovaten" type="text"></input>
	</div>
	<div class="col-md-4">
		<label for="timkiem_sdt">Số điện thoại:</label>
		<input class="form-control" type="tel" name="phone" id= "timkiem_sdt" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}"></input>
	</div>
	<div class="col-md-4">
		<a class="btn btn-success xuatpdf"style="width:120px;margin-top:32px;">Tìm kiếm</a>
	</div>
</div>
<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
	</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Mã khách hàng</th>
            <th>Họ và tên</th>
            <th width="30%">Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Trạng thái</th>
            <th>Hành Động</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Mã khách hàng</th>
            <th>Họ và tên</th>
            <th width="30%">Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Trạng thái</th>
            <th width="30%">Hành Động</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>
				<div class="row">
					<div class="col-md-4 hanhdong">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4 hanhdong">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4 hanhdong">
						<a class="btn btn-danger"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>
				<div class="row">
					<div class="col-md-4 hanhdong">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4 hanhdong">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4 hanhdong">
						<a class="btn btn-danger"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection

