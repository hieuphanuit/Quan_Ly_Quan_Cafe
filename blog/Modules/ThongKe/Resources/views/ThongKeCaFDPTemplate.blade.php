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
        Sample template

    </h1>

    <div class="card mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã hóa đơn</th>
                            <th>Người lập</th>
                            <th>Thời gian</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($HoaDons as $HoaDon)
                        <tr>
                            <td>{{$HoaDon->id}}</td>
                            <td>{{$HoaDon->NguoiLap->HoVaTen}}</td>
                            <td>{{date("d-m-Y H:i",strtotime($HoaDon->created_at))}}</td>
                            <td>
                                {{$HoaDon->TongTien}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <h3>Tổng thu: {{$TongThu}}</h3>

</body>