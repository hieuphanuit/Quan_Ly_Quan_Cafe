@extends('QuanLy.MasterQuanLy')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Thống kê</a>
  </li>
  <li class="breadcrumb-item active">Thống kê theo ngày</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thống kê theo ngày</h1>
<div class="container">
	<form class="thongketheongay">
		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
					Từ ngày:<input class="day_from form-control" type="text">
				</div>
				<div class="col-md-4">
					Đến ngày:<input class="day_to form-control" type="text">
				</div>
			</div>
		</div>
	</form>
	<h1 style="text-align: center;">Hóa đơn nguyên liệu</h1>
	<div class="form-group row">
			<div class="col-md-4">
			<label for="ThoiGian">Người lập:</label>
				<select  class="form-control">
				  <option value="#">Quản lý</option>
				  <option value="#">Thu ngân</option>
				</select>
			</div>
			<div class="col-md-4">
			<label for="ThoiGian">Nguyên liệu:</label>
				<select  class="form-control">
				  <option value="#">Nguyên liệu A</option>
				  <option value="#">Nguyên liệu B</option>	
				</select>
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
					<th>Mã hóa đơn</th>
					<th>Người nhập</th>
					<th>Thời gian</th>
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Mã hóa đơn</th>
					<th>Người nhập</th>
					<th>Thời gian</th>
					<th>Thành tiền</th>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>Tiger Nixon</td>
					<td>Cái</td>
					<td>61</td>
					<td>150</td>
				</tr>
				<tr>
					<td>Accountant</td> 
					<td>Cái</td>			
					<td>63</td>
					<td>
						125
					</td>
				</tr>
				<tr>
					<td>Ashton Cox</td>
					<td>Cái</td>
					<td>66</td>
					<td>
						123
					</td>
				</tr>
				<tr>
					<td>Cedric Kelly</td>
					<td>Cái</td>
					<td>22</td>
					<td>
						123
					</td>
				</tr>
				<tr>
					<td>Airi Satou</td>
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
	<h1 style="text-align: center;margin-bottom:20px;">Hóa đơn gọi món</h1>
	<div class="form-group row">
			<div class="col-md-4">
			<label for="ThoiGian">Người lập:</label>
				<select  class="form-control">
				  <option value="#">Quản lý</option>
				  <option value="#">Thu ngân</option>
				</select>
			</div>
			<div class="col-md-4">
			<label for="ThoiGian">Món:</label>
				<select  class="form-control">
				  <option value="#">Món A</option>
				  <option value="#">Món B</option>	
				</select>
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
					<th>Mã hóa đơn</th>
					<th>Người nhập</th>
					<th>Thời gian</th>
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Mã hóa đơn</th>
					<th>Người nhập</th>
					<th>Thời gian</th>
					<th>Thành tiền</th>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>Tiger Nixon</td>
					<td>Cái</td>
					<td>61</td>
					<td>150</td>
				</tr>
				<tr>
					<td>Accountant</td> 
					<td>Cái</td>			
					<td>63</td>
					<td>
						125
					</td>
				</tr>
				<tr>
					<td>Ashton Cox</td>
					<td>Cái</td>
					<td>66</td>
					<td>
						123
					</td>
				</tr>
				<tr>
					<td>Cedric Kelly</td>
					<td>Cái</td>
					<td>22</td>
					<td>
						123
					</td>
				</tr>
				<tr>
					<td>Airi Satou</td>
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
<div class="form-group">
	<label for="TongThu" >Tổng thu: </label>
	<input type="text" id="TongThu" name="TongThu"  class="form-control"readonly />
	<label for="TongChi" >Tổng chi: </label>
	<input type="text" id="TongChi" name="TongChi"  class="form-control"readonly />
	<label for="TongDoanhThu" >Doanh Thu: </label>
	<input type="text" id="TongDoanhThu" name="TongDoanhThu"  class="form-control"readonly />
</div>
<div align="right" style="margin-top:10px;margin-bottom:10px;">
	<a class="btn btn-success xuatpdf"style="width:120px;">Xuất PDF</a>
</div>
<script type="text/javascript">

    $('.day_from').datepicker({  

    format: "dd-mm-yyyy",
    });  
	
    $('.day_to').datepicker({  

    format: "dd-mm-yyyy",
    });  

</script> 
@endsection