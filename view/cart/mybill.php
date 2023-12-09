<div class="cart-content mb">
  <div class="boxtrai mr">
    <div class="mb">
      <div class="boxtitle" style="text-align: center;"><h2>ĐƠN HÀNG ĐÃ ĐẶT</h2></div>
      <div class="boxcontent">
      <div class="mb10 frmdsloai">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th></th>
                    </tr>
                    
                    <?php
                        if(is_array($allbill)){
                            foreach($allbill as $bill){
                                extract($bill);
                                $suabill='index.php?act=suabill&id='.$bill['id'];
                                $ttdh=getttdh($bill['trangthai']);
                                echo '<tr>
                                    <td>DH'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$bill['tong'].' đ</td>
                                    <td>'.$ttdh.'</td>
                                    <td><a href="'.$suabill.'"><input type="button" value="Chi tiết"></a></td>
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
