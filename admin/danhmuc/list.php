<div class="alldm">
  <div class="rowdm">

    <div class=" frmcontentdm">
      <div class=" frmtitle">
        <p>Danh Sách Loại Hàng</p>
      </div>
      <div class=" frmdsdm">
        <table>
          <tr>
            <th></th>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
            <th>Cài Đặt</th>
          </tr>

          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $suadm = 'index.php?act=suadm&id=' . $id;
            $xoadm = 'index.php?act=xoadm&id=' . $id;
            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>
                                <a href="' . $suadm . '"><input type="button" value="Sửa"></a>
                                <a href="' . $xoadm . '"><input type="button" value="Xoá"></a>
                                </td>
                            </tr>
                            ';
          }
          ?>
        </table>

      </div>
      <div class="">
        <!-- <input type="button" value="Chọn All" />
            <input type="button" value="Bỏ chọn All" /> -->
        <input type="button" value="Xóa mục đã chọn" />
      </div>
    </div>
  </div>



  <div class="rowdmadd">

    <div class=" frmcontentdmadd">

      <div class=" frmtitle">
        <p style="margin-left: 100px;">Danh Sách Loại Hàng</p>
        <?php
          if (isset($thongbao) && $thongbao != "") {
            echo '<div class="thongbao">' . $thongbao . '</div>';
          }
          ?>
      </div>
      
      <form action="index.php?act=listdm" method="post">
        <div class=" mb10">
          <input type="text" name="maloai" id="" disabled placeholder="Mã Loại">
        </div>
        <div class=" mb10">
          <input type="text" name="tenloai" id="" placeholder="Tên Loại">
        </div>
        <div class=" mb10">
          <input type="submit" name="themmoi" value="Thêm mới">
        </div>
       

      </form>
    </div>
  </div>
</div>