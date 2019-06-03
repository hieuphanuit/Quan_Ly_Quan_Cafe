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
    <div class="">
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
        <tbody>
          @foreach ($hoaDonNguyenLieus as $hoaDonNguyenLieu)
          <tr>
            <td>{{$hoaDonNguyenLieu->id}}</td>
            <td>{{$hoaDonNguyenLieu->MaNhanVien}}</td>
            <td>{{date("d-m-Y H:i",strtotime($hoaDonNguyenLieu->created_at))}}</td>
            <td>{{$hoaDonNguyenLieu->TongTien}}</td>
            <td>
              <div class="row">
                <div class="col-md-4 hanhdong">
                  <a href='{{url("/hoadonnguyenlieu/$hoaDonNguyenLieu->id/edit")}}' class="btn btn-info" style="width:80px;">Sửa</a>
                </div>
                <div class="col-md-4 hanhdong">
                  <a href='{{url("/hoadonnguyenlieu/$hoaDonNguyenLieu->id")}}' class="btn btn-warning" style="width:80px; color: white">Chi tiết</a>
                </div>
                <div class="col-md-4 hanhdong">
                  <form method="POST" action='{{url("/hoadonnguyenlieu/$hoaDonNguyenLieu->id/delete")}}' style="display: inline-block">
                    <input type="hidden" value="$hoaDonNguyenLieu->id" name="delete_hoadon" />
                    <button onclick="return confirm('Bạn có chắc muốn xóa khách hàng này không?')" class="btn btn-danger" style="width:80px;">
                      Xóa
                    </button>
                    {!! csrf_field() !!}
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $hoaDonNguyenLieus->links() }}
  </div>
  @endsection