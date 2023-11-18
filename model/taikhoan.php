<?php
if (session_status() == PHP_SESSION_NONE) {
    // Session chưa được bắt đầu, bắt đầu nó ở đây
    session_start();
}
function loadall_tk()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id ASC";
    $listaikhoan = pdo_query($sql);
    return $listaikhoan;
}

// Đăng ký tài khoản
function insert_tk($user, $pass, $email, $sdt)
{
    $sql = "INSERT INTO taikhoan (user, pass, email, sdt) VALUES ('$user', '$pass', '$email', '$sdt')";
    pdo_execute($sql);
}

// Đăng nhập
function dangnhap($user, $pass)
{
    // Sử dụng prepared statement để ngăn chặn SQL injection
    $sql = "SELECT * FROM taikhoan WHERE user=? AND pass=?";
    $taikhoan = pdo_query_one($sql, [$user, $pass]);

    if ($taikhoan !== false) {
        $_SESSION['user'] = $user;

        if ($user == 'admin' && $pass == '123456') {
            header("Location: index.php");
            exit(); // Đảm bảo chương trình dừng sau khi chuyển hướng
        }

        return "Đăng nhập thành công";
    } else {
        return "Thông tin tài khoản không chính xác";
    }
return $taikhoan ;
}



// Đăng xuất
function dangxuat()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}

// Gửi email khi quên mật khẩu (Chưa xử lý)
function sendMail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan !== false) {
        // sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return "Gửi email thành công";
    } else {
        return "Email không tồn tại trong hệ thống";
    }
}

// Hàm gửi email thực tế (Chưa xử lý)
// function sendMailPass($email, $username, $pass)
// {
//     require 'PHPMailer/src/Exception.php';
//     require 'PHPMailer/src/PHPMailer.php';
//     require 'PHPMailer/src/SMTP.php';

//     $mail = new PHPMailer\PHPMailer\PHPMailer(true);

//     try {
//         // Cài đặt máy chủ SMTP
//         $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
//         $mail->isSMTP();
//         $mail->Host       = 'sandbox.smtp.mailtrap.io';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = '6bda0a4c1abcfc';
//         $mail->Password   = '4430da6c8b9967';
//         $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
//         $mail->Port       = 587;

//         // Thiết lập người gửi và người nhận
//         $mail->setFrom('duanmau@example.com', 'DuAnMau');
//         $mail->addAddress($email, $username);

//         // Thiết lập nội dung email
//         $mail->isHTML(true);
//         $mail->Subject = 'Quên mật khẩu';
//         $mail->Body    = 'Mật khẩu của bạn là: ' . $pass;

//         $mail->send();
//     } catch (Exception $e) {
//         echo "Không thể gửi email. Lỗi Mailer: {$mail->ErrorInfo}";
//     }
// }
