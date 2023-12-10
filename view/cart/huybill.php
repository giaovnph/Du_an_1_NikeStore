<style>
  .alldm {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
    gap: 20px;
    width: 1200px;
    height: auto;
    margin-left: 200px;
}

.alldm p {
    color: rgb(0, 44, 73);
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 30px;
}
  .ctdhgiay {
    width: 750px;
    height: auto;
    background-color: #fff;
    border: 3px solid #ececec;
    min-height: 400px;
    /* Sử dụng min-height thay vì height */
    padding: 20px 20px;
    position: relative;
    z-index: 0;
    margin-bottom: 20px;
    
}
.ctdh {
    display: block;
    width: 350px;
    height: auto;
    background-color: #fff;
    border: 4px solid #ececec;
    margin-left: 410px;
    padding: 20px 10px;
    z-index: 1;
    list-style: none;
    
}

.frmdsctdh table {
    width: 100%;
    border-collapse: collapse;
    color: rgb(0, 44, 73);
}

.frmdsctdh table th {
    height: 70px;
    padding: 0 40px 0 0;
    background-color: rgb(0, 44, 73);
    color: #ffffff;
    position: relative;
    z-index: 0;
    font-size: 13px;
}

.frmdsctdh table td {
    padding: 40px 20px;
    font-size: 16px;

}
.frmdsctdh table td img{
    width: auto;
    font-weight: bold;
}
</style>
<div class="alldm">
 
    <form action="index.php?act=huybill" method="post">
      <?php
      if (isset($bill) && is_array($bill)) {
        extract($bill);
      }
      ?>
      <<div class="ctdhgiay">
    <div class=" frmtitle">
      
    </div>
    <p style="margin-bottom: 50px;">Thông Tin Giày</p>
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
    <div class=" mb10 formtaikhoan">
        <input type="hidden" name="id" value="<?= $bill['id'] ?>">
        <?php if($bill['trangthai']==0 || $bill['trangthai']==1){?>
        <input type="submit" name="huydonhang" value="Hủy đơn hàng" onclick="return confirm('Bạn chắc chắn muốn thực hiện hành động này?')">
        <?php } ?>
      </div>
    </form>
  </div>
  
     
    
    <div class="ctdh">
      <div class=" frmtitle">
      <p style="text-align: center;margin-bottom: 50px;">Chi Tiết Đơn Hàng</p>
    </div>
        <div class="boxcontent">
          <li><strong>Mã đơn hàng</strong> : DH<?= $bill['id'] ?></li>
          <li><strong>Ngày đặt hàng</strong> : <?= $bill['ngaydathang'] ?></li>
          <li><strong>Tổng đơn hàng</strong> : <?= number_format($bill['tong'], 0, '.', '.') ?></li>
          <li><strong>Trạng thái</strong> : <?= getttdh($bill['trangthai']) ?></li>
        </div>
        
      </div>
</div>
