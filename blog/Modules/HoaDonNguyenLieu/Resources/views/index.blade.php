@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Hóa đơn</a>
  </li>
  <li class="breadcrumb-item active">Danh sách hóa đơn nguyên liệu</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Danh sách hóa đơn nguyên liệu</h1>
<div class="col-md-5" style="padding-bottom:20px;">
  <a class="btn btn-success" href='{{url("/hoadonnguyenlieu/themhoadonnguyenlieu")}}'>Thêm hóa đơn nguyên liệu</a>
</div>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered dataTable" width="100%" cellspacing="0">
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
                  <a class="btn btn-info hanhdong" style="width:80px; color:#fff;">Sửa</a>
                </div>
                <div class="col-md-4">
                  <a class="btn btn-warning hanhdong" style="width:80px; color:#fff;">Chi tiết</a>
                </div>
                <div class="col-md-4">
                  <a class="btn btn-danger hanhdong" style="width:80px; color:#fff;">Xóa</a>
                </div>
              </div>
            </td>
          </tr>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  @endsection