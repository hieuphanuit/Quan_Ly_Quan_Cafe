@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Hóa đơn</a>
  </li>
  <li class="breadcrumb-item active">Thêm hóa đơn gọi món</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align:center;">Thêm hóa đơn gọi món</h1>
<div class="container">
	<form class="themhoadon">
		<div class="form-group">
			<label for="MaMon">Mã hóa đơn: </label>
			<input type="text" id="MaMon" name="MaMon"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TenMon">Người nhập: </label>
			<input type="text" id="TenMon" name="TenMon"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="ThoiGian">Thời gian: </label>
			<input type="text" id="ThoiGian" name="ThoiGian"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TongTien">Tổng tiền: </label>
			<input type="text" id="TongTien" name="TongTien"  class="form-control"/>
		</div>
	</form>
	<h1 style="text-align:center;">Chi tiết hóa đơn gọi món</h1>
	<form class="themchitiet">
		<div class="form-group">
			<label for="MaNguyenLieu">Mã nguyên liệu: </label>
			<input type="text" id="MaMon" name="MaMon"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TenNguyenLieu">Tên nguyên liệu: </label>
			<input type="text" id="TenMon" name="TenMon"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="ThoiGian">Số lượng: </label>
			<input type="text" id="ThoiGian" name="ThoiGian"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TongTien">Đơn giá: </label>
			<input type="text" id="TongTien" name="TongTien"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TongTien">Thành tiền: </label>
			<input type="text" id="TongTien" name="TongTien"  class="form-control"/>
		</div>
		<div class="form-group">
			<button class="btn btn-info" type="submit" style="margin-right:5px;">Thêm</button>
			<button class="btn btn-warning" type="submit">Cập nhật</button>
		</div>
	</form>
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
					<th>Thành tiền</th>
					<th width="33%">Hành Động</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Mã nguyên liệu</th>
					<th>Tên nguyên liệu</th>
					<th>Đơn vị tính</th>
					<th>Thành tiền</th>
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
								<a class="btn btn-danger"style="width:80px;">Xóa</a>
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
					<td>63</td>
					<td>
						<div class="row">
							<div class="col-md-3">
								<a class="btn btn-info"style="width:80px;">Sửa</a>
							</div>
							<div class="col-md-3">
								<a class="btn btn-danger"style="width:80px;">Xóa</a>
							</div>
							<div class="col-md-3">
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
								<a class="btn btn-danger"style="width:80px;">Xóa</a>
							</div>
							<div class="col-md-3">
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
								<a class="btn btn-danger"style="width:80px;">Xóa</a>
							</div>
							<div class="col-md-3">
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
								<a class="btn btn-danger"style="width:80px;">Xóa</a>
							</div>
							<div class="col-md-3">
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		  </table>
		</div>
	  </div>
</div>
@endsection