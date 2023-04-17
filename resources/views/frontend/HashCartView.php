<?php 
  $layout = "LayoutTrangTrong.php";
 ?>
<div class="template-cart">
  <form action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
      <table class="table table-cart">
        <thead>
          <tr>
            <th class="image">Ảnh sản phẩm</th>
            <th class="name">Tên sản phẩm</th>
            <th class="price">Giá bán lẻ</th>
            <th class="quantity">Số lượng</th>
            <th class="price">Thành tiền</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody>
        <h2>Đặt hàng thành công.</h2>
          <h3>Cảm ơn bạn đã đặt hàng trên website của chúng tôi! Nhân viên giao hàng sẽ liên hệ với bạn sớm nhất có thể.</h3>
        </tbody>
      </table>
      <div class="total-cart"> Tổng tiền thanh toán: 0₫ <br>
              <a href="index.php" class="button black">Tiếp tục mua hàng</a> </div>
    </div>
  </form>
  
</div>
