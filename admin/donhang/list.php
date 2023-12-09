<div class="alldm">
  <div class=" frmcontenttk">
    <div class=" frmtitle">
      <p>Danh Sách Đơn Hàng</p>
    </div>
    <div class=" frmdsdh">
      <!-- <form class="search-form" action="index.php?act=dsdh" method="post">  
                <input type="text" name="kyw" placeholder="Tìm kiếm...">
                <button type="submit" class="listspok"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form> -->

      <table>
        <tr>
          <th></th>
          <th>Mã Đơn Hàng</th>
          <th>Khách Hàng</th>
          <th>Giá Trị Đơn Hàng</th>
          <th>Tình Trạng Đơn Hàng</th>
          <th>Ngày Đặt Hàng</th>
          <th></th>
        </tr>

        <?php
        foreach ($dsdh as $dh) {
          extract($dh);
          $suabill = 'index.php?act=suabill&id=' . $dh['id'];
          $kh = $dh['name'] .
            '<br>' . $dh['email'] .
            '<br>' . $dh['diachi'] .
            '<br>' . $dh['sdt'];
          $ttdh = getttdh($dh['trangthai']);
          echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
<<<<<<< HEAD
                                <td>DH' . $dh['id'] . '</td>
                                <td style="text-align: left;">' . $kh . '</td>
                                <td>' . $dh['tong'] . ' $</td>
                                <td>' . $ttdh . '</td>
                                <td>' . $dh['ngaydathang'] . '</td>
                                <td><a href="' . $suabill . '"><input  type="button" value="Cập nhật"></a></td>
=======
                                <td>DH'.$dh['id'].'</td>
                                <td style="text-align: left;">'.$kh.'</td>
                                <td>'.$dh['tong'].' đ</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$dh['ngaydathang'].'</td>
                                <td><a href="'.$suabill.'"><input type="button" value="Cập nhật"></a></td>
>>>>>>> 918713e1dcd0f856e4b6a0906c92d51c25c364be
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