<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 14px;
        }

        table {
            border-collapse: collapse;
        }

        table td,
        table th {
            border: 1px solid rgb(56, 55, 55);
            padding: 5px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                    <h2>Thông tin khách hàng</h2>
                    </p>
                    <p><b>
                        Họ và tên:</b> {{ $orders->users->name }}
                    </p>
                    <p><b>
                        Email:</b> {{ $orders->users->email }}
                    </p>
                    <p><b>
                        Địa chỉ:</b> {{ $orders->users->address }}
                    </p>
                    <p><b>
                        Số điện thoại:</b> {{ $orders->users->phone }}
                    </p>
                    <p><b>
                        Ngày tạo đơn:</b> {{ $orders->created_at->format('D d/m/Y') }}
                    </p>
                    <br>
                </div>
                <div class="col-md-12">
                    <h2>Danh sách sản phẩm</h2>
                    <table class="table table-bordered" style="border-color:  #0a0a0a; width: 100%">
                        <thead style="background-color: #337ab7; color: #fff; border-color: #0a0a0a">
                            <tr>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá bán</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giảm giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #fff">
                            @foreach ($orderDetails as $item)
                                <tr>
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ number_format($item->products->price) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->products->discount }}%</td>
                                    <td>{{ number_format(($item->price - ($item->price * $item->discount) / 100) * $item->quantity) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <th colspan="5"> Tổng tiền: {{ $item->orders->total }}₫
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
