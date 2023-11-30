<div class="cart-content mb">
  <div class="boxtrai mr">
    <div class="mb">
      <div class="boxtitle">ĐƠN HÀNG ĐÃ ĐẶT</div>
      <div class="boxcontent">
      <div class="mb10 frmdsloai">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    
                    <?php
                        if(is_array($allbill)){
                            foreach($allbill as $bill){
                                extract($bill);
                                $ttdh=getttdh($bill['trangthai']);
                                echo '<tr>
                                    <td>DH'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$bill['tong'].'</td>
                                    <td>'.$ttdh.'</td>
                             </tr> ';
                            }
                        }

                    ?>

                </table>
                
            </div>       
      </div>
    </div>
  </div>
</div>
