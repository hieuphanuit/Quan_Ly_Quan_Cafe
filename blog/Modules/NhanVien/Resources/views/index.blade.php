@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Nhân viên</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Danh sách nhân viên</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success" href="/nhanvien/themnhanvien">Thêm nhân viên</a>
</div>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Table Example</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">
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
					<div class="col-md-3">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-danger"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-danger"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012/03/29</td>
            <td>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-danger"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-danger"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012/12/02</td>
            <td>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-info"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">
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
