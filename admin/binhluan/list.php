<div class="alldm">
  <div class=" frmcontenttk">
    <div class=" frmtitle">
      <p>Danh Sách Bình Luận</p>
    </div>
    <div class=" frmdstk">
        <form action="index.php?act=dsbl" method="POST">
            <div class=" mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>USER</th>
                        <th>SẢN PHẨM</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th></th>
                    </tr>
                    <?php 
                    $xacnhan = 'onclick = "return confirm(\'Bạn có thực sự muốn xóa ?\')";';
                        foreach($listBinhLuan as $binhluan) {
                            extract($binhluan);
                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idsp.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td><a '.$xacnhan.' href="index.php?act=xoabl&id='.$id.'"><input type="button" value="Xóa"></a></td>
                                </tr>
                            ';
                        }
                    ?>

                </table>
            </div>
            <div class=" mb10 " style="text-align: left;">
                <input type="button" value="Xóa mục đã chọn">
                <!-- <input  type="button" value="BỎ CHỌN TẤT CẢ"> -->
            </div>
        </form>
    </div>
</div>




</div>
