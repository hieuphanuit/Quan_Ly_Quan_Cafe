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
<h1 style="text-align: center;">Thông tin hóa đơn</h1>
<div class="col-md-5"style="padding-bottom:20px;">
	<a class="btn btn-success">Xuất hóa đơn</a>
</div>
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
	<h1>Chi tiết hóa Đơn</h1>
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
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Mã nguyên liệu</th>
					<th>Tên nguyên liệu</th>
					<th>Đơn vị tính</th>
					<th>Thành tiền</th>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>Tiger Nixon</td>
					<td>System Architect</td>
					<td>Cái</td>
					<td>61</td>
				</tr>
				<tr>
					<td>Garrett Winters</td>
					<td>Accountant</td> 
					<td>Cái</td>			
					<td>63</td>
				</tr>
				<tr>
					<td>Ashton Cox</td>
					<td>Junior Technical Author</td>
					<td>Cái</td>
					<td>66</td>
				</tr>
				<tr>
					<td>Cedric Kelly</td>
					<td>Edinburgh</td>
					<td>Cái</td>
					<td>22</td>
				</tr>
				<tr>
					<td>Airi Satou</td>
					<td>Tokyo</td>
					<td>Cái</td>
					<td>33</td>	
				</tr>
			</tbody>
		  </table>
		</div>
	  </div>
</div>
@endsection