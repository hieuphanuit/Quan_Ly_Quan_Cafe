@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Nhân viên</a>
  </li>
  <li class="breadcrumb-item active">Thông tin kho</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thông tin kho</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success" href="/kho/create">Thêm nguyên liệu</a>
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
            <th>Mã nguyên liệu</th>
            <th>Tên nguyên liệu</th>
            <th width="30%">Số lượng tồn</th>
            <th>Giá ước lượng</th>
            <th width="30%">Hành Động</th>
          </tr>
        </thead>
        <tfoot>
         <tr>
            <th>Mã nguyên liệu</th>
            <th>Tên nguyên liệu</th>
            <th width="30%">Số lượng tồn</th>
            <th>Giá ước lượng</th>
            <th width="30%">Hành Động</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td><input type="number" class="form-control"></input></td>
            <td>61</td>
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
             <td><input type="number" class="form-control"></input></td>
            <td>63</td>
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
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
             <td><input type="number" class="form-control"></input></td>
            <td>66</td>
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
	  <button class="btn btn-success" type="submit" style="float:right; margin:10px;">Cập nhật</button>
    </div>
  </div>
@endsection
