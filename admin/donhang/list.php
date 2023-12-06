<div class="row">
        <div class=" frmtitle mb">
          <h1>DANH SÁCH ĐƠN HÀNG</h1>
        </div>
        <form class="search-form" action="index.php?act=dsdh" method="post">  
                <input type="text" name="kyw" placeholder="Tìm kiếm...">
                  <input type="submit" name="listdhok" value="GO">
              </form>
        <div class=" frmcontent">
            <div class=" mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th></th>
                    </tr>
                    
                    <?php
                        foreach($dsdh as $dh){
                            extract($dh);
                            $suabill='index.php?act=suabill&id='.$dh['id'];
                            $kh=$dh['name'].
                            '<br>'.$dh['email'].
                            '<br>'.$dh['diachi'].
                            '<br>'.$dh['sdt'];
                            $ttdh=getttdh($dh['trangthai']);
                            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DH'.$dh['id'].'</td>
                                <td style="text-align: left;">'.$kh.'</td>
                                <td>'.$dh['tong'].' $</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$dh['ngaydathang'].'</td>
                                <td><a href="'.$suabill.'"><input type="button" value="Cập nhật"></a></td>
                            </tr>
                            ';
                        }
                    ?>
                </table>
            </div>
          <div class=" mb10">
            <!-- <input type="button" value="Chọn All" />
            <input type="button" value="Bỏ chọn All" /> -->
            <!-- <input type="button" value="Xóa mục đã chọn" />
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a> -->
          </div>
        </div>
      </div>
