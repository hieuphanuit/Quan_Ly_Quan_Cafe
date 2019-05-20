@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Kho</a>
  </li>
  <li class="breadcrumb-item active">Thông tin kho</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thông tin kho</h1>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Mã nguyên liệu</th>
            <th>Tên nguyên liệu</th>
            <th>Đơn vị tính</th>
			<th>Số lượng tồn</th>
			<th>Giá ước lượng</th>
            <th width="30%">Hành Động</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
			<th>Mã nguyên liệu</th>
            <th>Tên nguyên liệu</th>
            <th>Đơn vị tính</th>
			<th>Số lượng tồn</th>
			<th>Giá ước lượng</th>
            <th width="30%">Hành Động</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
			<td>Cái</td>
            <td><input type="number" min="1" style="width:50px; background-color: transparent; border: 0px solid;height: 20px; width: 50px;"></td>
            <td>60</td>
			<td>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">		
					</div>
				</div>
			</td>
          </tr>
          <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td> 
			<td>Cái</td>			
            <td><input type="number" min="1" style="width:50px; background-color: transparent; border: 0px solid;height: 20px; width: 50px;"></td>
            <td>60</td>
			<td>
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-info hanhdong"style="width:80px;">Sửa</a>
					</div>
					<div class="col-md-3">
						<a class="btn btn-warning hanhdong"style="width:80px;">Chi tiết</a>
					</div>
					<div class="col-md-3">		
					</div>
				</div>
			</td>
          </tr>
        </tbody>
      </table>
    </div>
	<div align="right" style="margin-top:10px;">
		<a class="btn btn-success hanhdong"style="width:120px;">Cập nhật</a>
	</div>
  </div>
@endsection