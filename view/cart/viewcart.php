<div class="cart-content mb">
  <div class="boxtrai mr">
    <div class="mb">
      <div class="boxtitle">Giỏ hàng của bạn</div>
      <div class="boxcontent">
      <div class="mb10 frmdsloai">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
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
                <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
          </div>          
      </div>
    </div>
  </div>
</div>
