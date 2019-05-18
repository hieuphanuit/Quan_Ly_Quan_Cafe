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
<h1 style="text-align: center;">Thống kê theo ngày</h1>
<div class="container">
	<form class="thongketheongay">
		<div class="form-group">
			<label for="ThoiGian">Thời gian: </label>
			<input type="text" id="ThoiGian" name="ThoiGian"  class="form-control"/>
		</div>
		<div class="form-group">
			<label for="TongDoanhThu">Doanh Thu: </label>
			<input type="text" id="TongDoanhThu" name="TongDoanhThu"  class="form-control"/>
		</div>
	</form>
	<h1 style="text-align: center;">Hóa đơn trong ngày</h1>
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Data Table Example</div>
		<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Mã hóa đơn</th>
					<th>Loại hóa đơn</th>
					<th>Người nhập</th>
					<th>Thời gian</th>
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Mã hóa đơn</th>
					<th>Loại hóa đơn</th>
					<th>Người nhập</th>
					<th>Thời gian</th>
					<th>Thành tiền</th>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>Tiger Nixon</td>
					<td>System Architect</td>
					<td>Cái</td>
					<td>61</td>
					<td>150</td>
				</tr>
				<tr>
					<td>Garrett Winters</td>
					<td>Accountant</td> 
					<td>Cái</td>			
					<td>63</td>
					<td>
						125
					</td>
				</tr>
				<tr>
					<td>Ashton Cox</td>
					<td>Junior Technical Author</td>
					<td>Cái</td>
					<td>66</td>
					<td>
						123
					</td>
				</tr>
				<tr>
					<td>Cedric Kelly</td>
					<td>Edinburgh</td>
					<td>Cái</td>
					<td>22</td>
					<td>
						123
					</td>
				</tr>
				<tr>
					<td>Airi Satou</td>
					<td>Tokyo</td>
					<td>Cái</td>
					<td>33</td>	
					<td>
						123
					</td>
				</tr>
			</tbody>
		  </table>
		</div>
	  </div>
</div>
@endsection