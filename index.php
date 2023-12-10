<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/binhluan.php";
include "model/cart.php";
include "global.php";
$listmenu = loadall_danhmuc();
include "view/header.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$top15sp = loadall_sanpham_top15();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = kttaikhoan($_POST['user'], $_POST['pass']);
                if (is_array($user)) {
                    $_SESSION['user'] = $user;
                    if ($_SESSION['user']['user'] == 'admin' && $_SESSION['user']['pass'] == '123456') {
                        header('Location: admin/index.php');
                    } else {
                        header('Location: index.php');
                        //$thongbao="Đăng nhập thành công.";
                    }
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu sai, vui lòng thử lại";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                insert_taikhoan($_POST['email'], $_POST['user'], $_POST['pass'], $_POST['diachi'], $_POST['sdt']);
                $thongbao = "Đăng ký thành công";
                // header('Location: index.php?act=dangnhap');

            }
            include "view/taikhoan/dangky.php";
            break;

        case 'edittk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                update_taikhoan($id, $email, $user, $pass, $diachi, $sdt);
                $_SESSION['user'] = kttaikhoan($user, $pass);
                echo '<script>
                            alert("Cập nhật thành công");
                        </script>';
            }
            include "view/taikhoan/edittk.php";
            break;
        case 'quenmk':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $email = $_POST['email'];
                $tk = ktemail($email);
                if (is_array($tk)) {
                    $thongbao = "Mật khẩu của bạn là: " . $tk['pass'];
                } else {
                    $thongbao = "Email không tồn tại.";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;

        case 'sanphamct':
            if (isset($_POST['guibinhluan'])) {
                if(isset($_SESSION['user'])){
                    insert_binhluan($_POST['idsp'], $_POST['noidung'], $_SESSION['user']['id']);
                }else{
                    echo '<script>
                    alert("Bạn chỉ có thể để lại bình luận sau khi đăng nhập !");
                 </script>';
                }  
            }
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $spct = loadone_sanpham($id);
                extract($spct);
                $spcungloai = load_sanpham_cungloai($id, $danhmuc);
                $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dm = loadone_danhmuc($iddm);
                extract($dm);
                $tendm = $name;
            } else {
                $iddm = 0;
                $tendm = $kyw;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            include "view/sanpham.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'] != "")) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $kichco = $_POST['kichco'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $thanhtien = $soluong * $gia;
                
                // Check trùng sản phẩm
                if(checktrungsp($id,$kichco)>=0){
                    update_soluong(checktrungsp($id,$kichco));
                }else{
                    $addsp = [$id, $name, $kichco, $img, $gia, $soluong, $thanhtien];
                    array_push($_SESSION['mycart'], $addsp);
                }           
            }   
            
            header('Location: index.php?act=viewcart');
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;

        case 'viewcart':
            include "view/cart/viewcart.php";
            break;

        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'xnbill':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
                $user = $_POST['name'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $pttt = $_POST['pttt'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaydathang = date('h:i:s - d/m/y');
                $tongdonhang = tongdonhang();
                if ($tongdonhang > 0) {
                    $idbill = insertbill($iduser, $user, $email, $diachi, $sdt, $pttt, $ngaydathang, $tongdonhang);
                } else {
                    echo '<script>
                            alert("Bạn chưa chọn mua sản phẩm nào !");
                            window.location.href = "http://localhost/PHP/Du_an_1_NikeStore/index.php?act=sanpham";
                        </script>';
                }
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($iduser, $cart[0], $cart[3], $cart[1], $cart[2], $cart[4], $cart[5], $cart[6], $idbill);
                }

                $_SESSION['mycart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadone_cart($idbill);
            include "view/cart/xnbill.php";
            echo '<script>
            alert("Đặt hàng thành công !");
                 </script>';
            break;
        case 'xoabill':
            $allbill = loadall_bill("", $_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'mybill':
            $allbill = loadall_bill("", $_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'suabill':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bill = loadone_bill($_GET['id']);
                $billct = loadone_cart($_GET['id']);
            }
            include "view/cart/huybill.php";
            break;
        case 'huybill':
            if (isset($_POST['huydonhang']) && $_POST['huydonhang']) {
                $id = $_POST['id'];
                huy_bill($id);
                // $thongbao = "Cập nhật thành công";
            }
            $allbill = loadall_bill("", $_SESSION['user']['id']);
            include "view/cart/mybill.php";
            echo '<script>
                    alert("Bạn đã hủy đơn hàng !");
                 </script>';
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
