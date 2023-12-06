<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">

<div class="cart-content mb">
  <div class="boxtrai mr">
    <div class="mb">
      <div class="boxlogo"><img src="view/images/Nike_logo.png" width="40px"></div>
      <div class="boxtitle" style="text-align: center; font-size: 20px; font-weight: bold;">Giỏ hàng của bạn</div>
      <div class="boxcontent">
      <div class="mb10 frmdsloai">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Kích cỡ</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    
                    <?php
                      viewcart(1);
                    ?>

                </table>
                
            </div>
            <div class="mb10 frmdsloai">
                <a href="index.php?act=sanpham"><input type="button" value="TIẾP TỤC MUA HÀNG"></a>
                <a href="index.php?act=bill"><input type="button" value="THANH TOÁN ĐƠN HÀNG"></a>
                <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
          </div>          
      </div>
    </div>
  </div>
</div>
