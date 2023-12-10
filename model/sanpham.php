<?php

    function loadall_sanpham_top15(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,15";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_top4(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,4";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham($kyw, $iddm){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm!=0){
            $sql.=" and danhmuc='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function load_sanpham_cungloai($id, $iddm){ 
        $sql="select * from sanpham where danhmuc=".$iddm." AND id <> ".$id;
        $sp=pdo_query($sql);
        return $sp;
    }

    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function insert_sanpham($name,$gia,$img,$mota,$danhmuc){
        $sql="insert into sanpham(name,gia,img,mota,danhmuc) values('$name','$gia','$img','$mota','$danhmuc')";
        pdo_execute($sql);
    }

    function update_sanpham($id,$name,$gia,$img,$mota,$danhmuc){
        $sql="update sanpham set name='".$name."', gia='".$gia."', img='".$img."', mota='".$mota."', danhmuc='".$danhmuc."' where id =".$id;
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function update_soluong($vitri){
        for ($i=0; $i < sizeof($_SESSION['mycart']); $i++) { 
            if($i==$vitri){
                $_SESSION['mycart'][$i][5]+=$_POST['soluong'];
            }
        }
    }
    function checktrungsp($id,$kichco){
        $vitri=-1;
        for ($i=0; $i < sizeof($_SESSION['mycart']); $i++) { 
            if($_SESSION['mycart'][$i][0]==$id&&$_SESSION['mycart'][$i][2]==$kichco){
                $vitri=$i;
            }
        }
        return $vitri;
    }
    
?>
