<div class="row">
    <div class=" frmtitle">
        <h1>Danh Sách Bình Luận</h1>
    </div>
    <div class=" frmcontent ">
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
                                    <td><a href="index.php?act=xoabl&id='.$id.'"><input type="button" value="Xóa"></a></td>
                                </tr>
                            ';
                        }
                    ?>


                </table>
            </div>
            <div class=" mb10 ">
                <input  type="button" value="Xóa mục đã chọn">
                <!-- <input  type="button" value="BỎ CHỌN TẤT CẢ"> -->
            </div>
        </form>
    </div>
</div>




</div>
