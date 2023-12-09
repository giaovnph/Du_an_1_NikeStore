<?php
    if(is_array($sp)){
        extract($sp);
        $ten=$name;
    }
    $hinhpath="./uploads/".$img;
    if(is_file($hinhpath)){
      $hinh='<img src="'.$hinhpath.'" alt="" height="80">';
    }
    else{
      $hinh="no";
    }
?>

<div class="alldm">
    <div class=" frmcontentspud">
        <div class=" frmtitle">
            <p style="font-size: 22px; margin-bottom: 50px;text-align: center;">Cập Nhật Sản Phẩm</p>
        </div>
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="">
                <span class="chusp-ud">Danh Mục</span >
                    <select name="iddm" id="udddm">
                        <?php
                            foreach($listdanhmuc as $dm){
                                extract($dm);
                                if($danhmuc==$id)
                                    echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                else
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </select> 
                </div>
                <div class="sp">
                <span class="chusp-ud">Tên Giày</span ><br>
                    <input type="text" name="tensp" id="tensp" value="<?=$ten?>">
                </div>
                
                <div class="sp">
                <span class="chusp-ud">Giá Cả</span ><br>
                    <input type="text" name="giasp" id="giasp" value="<?=$gia?>">
                </div>
                <div class="">
                <span class="chusp-ud">Hình Ảnh</span ><br>
                    <input type="file" name="hinhsp"><br>
                    <input type="hidden" name="hinhspcu" value="<?=$img?>">
                    <?php
                        echo $hinh;
                    ?>
                </div>
                <div class="">
                <span class="chusp-ud">Mô Tả</span ><br>
                    <textarea name="motasp" id="motasp" cols="30" s="10"><?=$mota?></textarea>
                </div>
                <div class=" mb10">
                <input class="inpud" type="submit" name="capnhat" value="Cập nhật">
                    <a href="index.php?act=listsp"><input class="inpud" type="button" value="Danh sách"></a>
                </div>
                <?php
                    if(isset($thongbao)&&$thongbao!="") echo "Cập nhật thành công";
                ?>
            </form>
        </div>
</div>
