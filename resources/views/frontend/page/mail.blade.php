<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận đặt hàng</title>
</head>
<body>
    <h1>Cảm ơn bạn đã đặt hàng!</h1>
    <p>Dưới đây là chi tiết đơn hàng:</p>
    <p><strong>Số đơn hàng:</strong> {{ $order->id }}</p>
    <p><strong>Ngày đặt:</strong> {{ $order->created_at->format('d/m/Y') }}</p>
    <p><strong>Thông tin khách hàng:</strong></p>
    <ul>
        <li><strong>Họ tên:</strong> {{ $order->users->name }}</li>
        <li><strong>Email:</strong> {{ $order->users->email }}</li>
        <li><strong>Số điện thoại:</strong> {{ $order->users->phone }}</li>
        <li><strong>Địa chỉ:</strong> {{ $order->users->address }}</li>
    </ul>
    <p><strong>Chi tiết đơn hàng:</strong></p>
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderDetails as $item)
                <tr>
                    <td>{{ $item->products->name }}</td>
                    <td>{{ $item->products->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->quantity * $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Tổng tiền</td>
                <td>{{ $order->total }}</td>
            </tr>
        </tfoot>
    </table>
    <p><strong>Hãy liên hệ với chúng tôi nếu có thêm thắc mắc gì.</strong></p>
    <p><strong>Cảm ơn,</strong></p>
    <p><strong>Nshop - BookStore</strong></p>
</body>
</html>
