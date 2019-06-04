<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <style>
        body{
            font-family: DejaVu Sans;
        }
        table{
            padding: 0;
            border: none;
            border-collapse: collapse;
            border: 1px solid #ddd;
            width: 1170px;
            margin: 50px auto 10px;
        }
        table td {
            padding: 0;
            border: none;
            border-collapse: collapse;
        }
        .table tr>td, 
        .table tr>th {
            border: 1px solid #ddd;
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
            font-weight: normal;
        }
        .table tr>th{
            font-weight: 700
        }
        </style>
</head>

<body>
    <h1>
       Hóa đơn
    </h1>
    <label>Mã hóa đơn: {{$hoaDonGoiMon->id}}</label><br/>
    <label>Ngày tạo:  {{date("d-m-Y H:i",strtotime($hoaDonGoiMon->created_at))}}</label><br/>
    <label>Nhân viên: {{$hoaDonGoiMon->NguoiLap->HoVaTen}}</label><br/>
    <div class="card mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên món</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ChiTietHoaDonGoiMons as $ChiTietHoaDonGoiMon)
                        <tr>
                            <td>{{$ChiTietHoaDonGoiMon->ThucDon->TenMon}}</td>
                            <td>{{$ChiTietHoaDonGoiMon->SoLuong}}</td>
                            <td>{{$ChiTietHoaDonGoiMon->ThucDon->DonGia}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <h3>Tổng: {{$hoaDonGoiMon->TongTien}}</h3>

</body>