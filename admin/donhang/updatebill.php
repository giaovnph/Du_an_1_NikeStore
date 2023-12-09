<div class="alldm">
<div class="ctdhgiay">
    <div class=" frmtitle">
      <p style="margin-bottom: 50px;">Thông Tin Giày</p>
    </div>
    <div class=" frmdsctdh">
      <table>
        <tr>
          <th>Hình</th>
          <th>Sản phẩm</th>
          <th>Kích cỡ</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
        </tr>
        <?php
        billchitiet_ad($billct);
        ?>
      </table>
    </div>


  </div>



  <div class="ctdh">
    <div class=" frmtitle">
      <p style="text-align: center;margin-bottom: 50px;">Chi Tiết Đơn Hàng</p>
    </div>
    <form action="index.php?act=updatebill" method="post">
      <?php
      if (isset($bill) && is_array($bill)) {
        extract($bill);
      }
      ?>
      <div class="boxcontent">
        <li>Mã đơn hàng <strong>DH<?= $bill['id'] ?></strong></li>
        <li>Ngày đặt hàng <strong><?= $bill['ngaydathang'] ?></strong></li>
        <li>Tổng đơn hàng <strong><?= $bill['tong'] ?> đ </strong></li>
      <hr>
        <li>
          <span>Trạng thái</span><select name="ttdh" id="">
            <?php

            for ($i = 0; $i < 4; $i++) {
              $load_trangthai = getttdh($i);
              if ($trangthai == $i)
                echo '<option value="' . $i . '" selected>' . getttdh($i) . '</option>';
              else
                echo '<option value="' . $i . '">' . getttdh($i) . '</option>';
            }
            ?>
          </select> </li>
          <hr>

      </div>
      <div class="chitiet-nut">
        <input type="hidden" name="id" value="<?= $bill['id'] ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
    </form>

  </div>



</div>
