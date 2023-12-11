<div class="alldm">

  <!-- <form class="search-form" action="index.php?act=listsp" method="post">
    <input type="text" name="kyw" placeholder="Tìm kiếm...">
    <select name="iddm" id="">
      <option value="0" selected>Tất cả</option>
      <?php
      foreach ($listdanhmuc as $danhmuc) {
        extract($danhmuc);
        echo '<option value="' . $id . '">' . $name . '</option>';
      }
      ?>
    </select>
     <button type="submit" class="listspok"><i class="fa-solid fa-magnifying-glass"></i></button>

  </form> -->
  <div class=" frmcontentsp">
    <div class=" frmtitle">
      <p>Danh Sách Sản Phẩm</p>
    </div>
    <div class=" frmdssp">
      <table>
        <tr>
          <th></th>
          <th>Mã Giày</th>
          <th>Tên Giày</th>
          <th>Hình Ảnh </th>
          <th>Lượt xem</th>
          <th>Số Tiền</th>         
          <th>Cài Đặt</th>
        </tr>

        <?php
        foreach ($listsanpham as $sp) {
          extract($sp);
          $suasp = 'index.php?act=suasp&id=' . $id;
          $xoasp = 'index.php?act=xoasp&id=' . $id;
          $xacnhan = 'onclick = "return confirm(\'Bạn có thực sự muốn xóa ?\')";';
          $hinhpath = "./uploads/" . $img;
          if (is_file($hinhpath)) {
            $hinh = '<img src="' . $hinhpath . '" alt="" height="80">';
          } else {
            $hinh = "no";
          }
          echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $hinh . '</td>
                                <td style="text-align: center;">' . $luotxem . '</td>
                                <td>' . number_format($gia, 0, '.', '.') . ' đ</td>
                                <td>
                                <a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                                <a '.$xacnhan.' href="' . $xoasp . '"><input type="button" value="Xoá"></a>
                                </td>
                            </tr>
                            ';
        }
        ?>
      </table>
    </div>
    <div class="">
      <!-- <input type="button" name="select-all" value="Chọn All" />
            <input type="button" name="deselectAll" value="Bỏ chọn All" /> -->
      <input type="button" value="Xóa mục đã chọn" />
    </div>
  </div>

  <div>
    <div class="rowdmadd">

      <div class=" frmcontentspadd">

        <div class=" frmtitle">
          <p style="margin-left: 100px;">Thêm Mới Sản Phẩm</p>
        </div>
        <?php
          if (isset($thongbao) && $thongbao != "") {
            echo '<div class="thongbao">' . $thongbao . '</div>';
          }
          ?>
        <form action="index.php?act=listsp" method="post" enctype="multipart/form-data">
          <div class=" ">
            <span class="frmdssp-ten">Danh mục</span>
            <select name="iddm" id="adddm" required>
              <?php
              foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
              }
              ?>
            </select>
          </div>
          <div class=" ">
            <input type="text" name="tensp" placeholder="Tên Giày">
          </div>
          <div class=" ">
            <input type="text" name="giasp" placeholder="Số tiền">
          </div>
          <div class=" ">
            <span class="frmdssp-ten">Hình ảnh</span><br>
            <input type="file" name="hinhsp" id="">
          </div>
          <div class="">
            <span class="frmdssp-ten">Mô tả</span><br>
            <textarea name="motasp" id="addmota" cols="30" s="10"></textarea>
          </div>
          <div class=" ">
            <input type="submit" name="themmoi" value="Thêm mới">
          </div>
          

        </form>
      </div>
    </div>
  </div>
</div>












<script>
  // Lấy tất cả các checkbox box
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Lấy nút chọn tất cả
  const selectAllButton = document.querySelector('input[name="select-all"]');

  // Lấy nút bỏ chọn tất cả
  const deselectAllButton = document.querySelector('input[name="deselectAll"]');

  // Thêm sự kiện click vào nút chọn tất cả
  selectAllButton.addEventListener('click', () => {
    // Chọn tất cả checkbox box
    checkboxes.forEach(checkbox => {
      checkbox.checked = true;
    });
  });
  // Thêm sự kiện click vào nút bỏ chọn tất cả
  deselectAllButton.addEventListener('click', () => {
    // Bỏ chọn tất cả checkbox box
    checkboxes.forEach(checkbox => {
      checkbox.checked = false;
    });
  });
</script>
