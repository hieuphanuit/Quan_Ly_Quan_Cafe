<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <style>
        body {
            font-family: DejaVu Sans;
        }

        table {
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

        .table tr>th {
            font-weight: 700
        }
    </style>
</head>

<body>
    <h1>
        Thống kê theo ngày
    </h1>
    <p> Từ ngày : {{$fromdateFilter}} </p>
    <p> Đến ngày : {{$todateFilter}} </p>
    <h2 style="text-align: center;margin-bottom:20px;">Hóa đơn nguyên liệu</h2>    
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ngày</th>
                            <th>Tổng số hóa đơn</th>
                            <th>Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($HoaDonNguyenLieus as $HoaDonNguyenLieu)
                        <tr>
                            <td>{{$HoaDonNguyenLieu->date}}</td>
                            <td>{{$HoaDonNguyenLieu->TongSoHoaDon}}</td>
                            <td>
                                {{$HoaDonNguyenLieu->TongTien}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h2 style="text-align: center;margin-bottom:20px;">Hóa đơn gọi món</h2>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ngày</th>
                            <th>Tổng số hóa đơn</th>
                            <th>Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($HoaDonGoiMons as $HoaDonGoiMon)
                        <tr>
                            <td>{{$HoaDonGoiMon->date}}</td>
                            <td>{{$HoaDonGoiMon->TongSoHoaDon}}</td>
                            <td>
                                {{$HoaDonGoiMon->TongTien}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h3>Tổng thu: {{$TongThu}}</h3>
    <h3>Tổng chi: {{$TongChi}}</h3>
    <h3>Doanh thu: {{$DoanhThu}}</h3>

</body>