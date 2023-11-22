<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "model/global.php";
include "model/taikhoan.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap':
            include "view/taikhoan/dangnhap.php";
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = kttaikhoan($_POST['user'], $_POST['pass']);
                if (is_array($user)) {
                    $_SESSION['user'] = $user;
                    header('Location: index.php');
                    //$thongbao="Đăng nhập thành công.";
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu không đúng, vui lòng thử lại";
                }
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                insert_taikhoan($_POST['email'], $_POST['user'], $_POST['pass'], $_POST['sdt']);
                $thongbao = "thanh cong";
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
    }
} else {
    include "view/home.php";
}
include "./view/footer.php";
