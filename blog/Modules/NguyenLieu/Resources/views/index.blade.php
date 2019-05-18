@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Danh sách nguyên liệu</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success" href="/nguyenlieu/themnguyenlieu">Thêm nguyên liệu</a>
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
            <th>Mã nguyên liệu</th>
            <th>Tên nguyên liệu</th>
            <th>Đơn vị tính</th>
			<th>Giá ước lượng</th>
            <th>Hành Động</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
			<th>Mã nguyên liệu</th>
            <th>Tên nguyên liệu</th>
            <th>Đơn vị tính</th>
			<th>Giá ước lượng</th>
            <th>Hành Động</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
			<td>Cái</td>
            <td>61</td>
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
			<td>Cái</td>			
            <td>63</td>
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
			<td>Cái</td>
            <td>66</td>
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
            <td>Edinburgh</td>
			<td>Cái</td>
            <td>22</td>
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
            <td>Tokyo</td>
			<td>Cái</td>
            <td>33</td>	
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
			<td>Cái</td>
            <td>61</td>
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