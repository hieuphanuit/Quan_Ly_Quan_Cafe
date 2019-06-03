@extends('master')

@section('Breadcrumbs')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href='{{url("/kho")}}'>Kho</a>
  </li>
  <li class="breadcrumb-item active">Thông tin kho</li>
</ol>
@endsection
@section('Content')
<h1 style="text-align: center;">Thông tin kho</h1>
<div class="col-md-5" style="padding-bottom:20px;">
  <a class="btn btn-success" href="{{url('/nguyenlieu/create')}}">Thêm nguyên liệu</a>
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
              <th>Tên nguyên liệu</th>
              <th width="30%">Số lượng tồn</th>
              <th>Giá ước lượng</th>
              <th width="30%">Hành Động</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($NguyenLieus as $NguyenLieu)
            <tr>
              <td>{{$NguyenLieu->TenNguyenLieu}}</td>
              <td><input type="number" class="form-control soLuongTon" data-id="{{$NguyenLieu->id}}" value="{{$NguyenLieu->SoLuongTon}}" />
              <td>{{$NguyenLieu->GiaUocLuong}}</td>
              <td>
                <div class="row">
                  <div class="col-md-4 hanhdong">
                    <a class="btn btn-info" style="width:80px; color:#fff;" href='{{url("nguyenlieu/".$NguyenLieu->id."/edit")}}'>Sửa</a>
                  </div>
                  <div class="col-md-4 hanhdong">
                    <a class="btn btn-warning" style="width:80px; color:#fff;" href='{{url("nguyenlieu/".$NguyenLieu->id)}}'>Chi tiết</a>
                  </div>
                  <div class="col-md-4 hanhdong">
                    <form method="POST" action='{{url("/nguyenlieu/$NguyenLieu->id/delete")}}' style="display: inline-block">
                      <input type="hidden" value="$NguyenLieu->id" name="delete_nguyenlieu" />
                      <button onclick="return confirm('Bạn có chắc muốn xóa nguyên liệu này không?')" class="btn btn-danger" style="width:80px;">
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
        <div>
          {{$NguyenLieus->links()}}
        </div>

      <form method="POST" id="capNhapSoLuong" action='{{url("/nguyenlieu/capNhapSoLuong")}}'>
        {!! csrf_field() !!}
        <button class="btn btn-success" type="submit" style="float:right; margin:10px;">Cập nhật</button>
      </form>
    </div>
  </div>

  <script>
    $('.soLuongTon').change(function(){
      var id = $(this).data('id');
      var soLuong = $(this).val();
      var idInput = '<input type="hidden" name="id[]" value="' + id + '">';
      var soLuongInput = '<input type="hidden" name="soLuong[]" value="' + soLuong + '">';
      $('#capNhapSoLuong').append(idInput);
      $('#capNhapSoLuong').append(soLuongInput);

    })
  </script>
  @endsection