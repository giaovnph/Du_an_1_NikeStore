<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="alldm">
    <div class=" frmcontentdmud">
        <div class=" frmtitle">
            <p style="font-size: 22px; margin-bottom: 50px;">Danh Sách Loại Hàng</p>
        </div>
        <form action="index.php?act=updatedm" method="post">
            <div class=" mb10">
                <span class="chu-ud">Mã loại</span ><br>
                <input type="text" name="maloai" id="" disabled>
            </div>
            <div class=" mb10">
                <span class="chu-ud">Tên loại</span ><br>
                <input type="text" name="tenloai" id="" value="<?php if (isset($name) && $name != "") echo $name ?>">
            </div>
            <div class=" mb10">
                <input  type="hidden" name="id" value="<?php if (isset($id) && $id > 0) echo $id ?>">
                <input class="inpud" type="submit" name="capnhat" value="Cập nhật">
                <a href="index.php?act=listdm"><input class="inpud" type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "") echo "Cập nhật thành công";
            ?>
        </form>
    </div>
</div>

<div>

</div>