<div class="row">
        <div class=" frmtitle">
            <h1>THÊM MỚI SẢN PHẨM</h1>
        </div>
        <div class=" frmcontent">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class=" mb10">
                    Danh mục
                    <select name="iddm" id="">
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </select> 
                </div>
                <div class=" mb10">
                    Tên sản phẩm<br>
                    <input type="text" name="tensp" id="">
                </div>
                <div class=" mb10">
                    Giá<br>
                    <input type="text" name="giasp" id="">
                </div>
                <div class=" mb10">
                    Hình<br>
                    <input type="file" name="hinhsp" id="">
                </div>
                <div class=" mb10">
                    Mô tả<br>
                    <textarea name="motasp" id="" cols="30" s="10"></textarea>
                </div>
                <div class=" mb10">
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>
                <?php
                    if(isset($thongbao)&&$thongbao!="") echo "Thêm thành công";
                ?>
            </form>
        </div>
</div>
