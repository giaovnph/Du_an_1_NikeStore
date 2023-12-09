<div class="row">
        <div class=" frmtitle">
            <h1>Thêm Mới Loại Hàng Hóa</h1>
        </div>
        <div class=" frmcontent">
            <form action="index.php?act=adddm" method="post">
                <div class=" mb10">
                    Mã loại<br>
                    <input type="text" name="maloai" id="" disabled> 
                </div>
                <div class=" mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai" id="">
                </div>
                <div class=" mb10">
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                </div>
                <?php
                    if(isset($thongbao)&&$thongbao!="") echo "Thêm thành công";
                ?>
            </form>
        </div>
</div>
