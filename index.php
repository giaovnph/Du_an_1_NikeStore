<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "model/global.php";
include "model/taikhoan.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "dangky":
            if (isset($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $sdt = $_POST['sdt'];

                if (empty($email) || empty($user) || empty($pass) || empty($sdt)) {
                    $thongbao = "Vui lòng điền đầy đủ thông tin.";
                } else {
                    insert_tk($user, $pass, $email, $sdt);
                    include "view/taikhoan/dangnhap.php";

                }
            }
            include "view/taikhoan/dangky.php";
            break;

            case "dangnhap":
                if (isset($_POST['dangnhap']) && isset($_POST['dangnhap'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $dangnhap = dangnhap($user, $pass);
    
                    if (is_array($dangnhap)) {
                        $_SESSION['user'] = $dangnhap;
                include "view/home.php";
                        
                    } else {
                        $thongbao = "Không tìm thấy tài khoản";
                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;
            case "dangxuat":
                dangxuat();
                include "view/home.php";
                break;
            case "quenmk":
                if (isset($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $sendMailMess = sendMail($email);
                }
                include "view/login/quenmk.php";
                break;
    }
} else {
    include "view/home.php";
}
    include "./view/footer.php"; 
?>