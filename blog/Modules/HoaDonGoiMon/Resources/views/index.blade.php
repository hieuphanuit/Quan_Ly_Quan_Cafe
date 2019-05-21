@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Hóa đơn</a>
  </li>
  <li class="breadcrumb-item active">Danh sách hóa đơn gọi món</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Danh sách hóa đơn gọi món</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success" href="/hoadon/themhoadongoimon">Thêm hóa đơn gọi món</a>
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
            <th>Mã hóa đơn</th>
            <th>Người lập</th>
            <th>Thời gian</th>
            <th>Tổng tiền</th>
            <th width="30%">Hành Động</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Mã hóa đơn</th>
            <th>Người lập</th>
            <th>Thời gian</th>
            <th>Tổng tiền</th>
            <th width="30%">Hành Động</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>2011/04/25</td>
            <td>61</td>
            
            <td>
				<div class="row">
					<div class="col-md-4">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-danger hanhdong"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
             <td>2011/07/25</td>
            <td>63</td>
           
            <td>
				<div class="row">
					<div class="col-md-4">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-danger hanhdong"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>2009/01/12</td>
            <td>66</td>
            
            <td>
				<div class="row">
					<div class="col-md-4">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-danger hanhdong"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>2012/03/29</td>
            <td>22</td>
            
            <td>
				<div class="row">
					<div class="col-md-4">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-danger hanhdong"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
             <td>2008/11/28</td>
            <td>33</td>
           
            <td>
				<div class="row">
					<div class="col-md-4">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-danger hanhdong"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
			<td>2012/12/02</td>
            <td>61</td>
            
            <td>
				<div class="row">
					<div class="col-md-4">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-danger hanhdong"style="width:80px;">Xóa</a>
					</div>
				</div>
			</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection