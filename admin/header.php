<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <!-- CSS của ứng dụng -->
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">

</head>

<body>
    <!-- Bắt đầu trang -->
    <div class="all">
        <div class="mnn">
            
                        
            <div class="ex">
                <a href="index.php?act=thoat"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
            <div class="search-box">
                    <form   method="post">
                        <input class="search-box__text" type="text" name="kyw" placeholder="Tìm kiếm" id="" required>
                        <button type="submit" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
           

        </div>

        <!-- Thanh bên trái -->
        <div class="mnd">
            <div class="logo">
                <a href="http://localhost/php/Du_an_1_NikeStore/index.php">
                    <img src="../view/images/Logo.png" alt="">
                </a>
            </div>

            <ul class="menu" id="side-menu">

                <li class="chu-lon">
                    <a href="index.php">
                        <p><i id="ic" class="fa-solid fa-house" style="font-size: 13px;"></i>TRANG CHỦ </p>
                    </a>
                </li>

                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" id="ic" class="fa-solid fa-shop"></i> SẢN PHẨM <i id="angne" class="fa-solid fa-angle-right"></i></i></p>

                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=listdm"><i id="icn" class="fa-regular fa-file"></i> Danh mục</a>
                        </li>
                        <li>
                            <a href="index.php?act=listsp"><i id="icn" class="fa-solid fa-shoe-prints"></i>Hàng hóa</a>
                        </li>
                    </ul>
                </li>

                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" id="ic" class="fa-solid fa-users"></i> KHÁCH HÀNG <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=dskh"><i id="icn" class="fa-solid fa-user"></i> Tài khoản</a>
                        </li>
                    </ul>
                </li>

                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" id="ic" class="fa-solid fa-cart-shopping"></i> ĐƠN HÀNG <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=dsdh"><i id="icn" class="fa-regular fa-file"></i> Danh sách đơn hàng</a>
                        </li>
                    </ul>
                </li>
                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" id="ic" class="fa-solid fa-comments"></i> BÌNH LUẬN <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=dsbl"><i id="icn" class="fa-regular fa-file"></i>Danh sách bình luận</a>
                        </li>
                    </ul>
                </li>
                <li class="chu-lon">

                    <a href="javascript: void(0);">
                        <p><i style="font-size: 13px;" id="ic" class="fa-solid fa-chart-simple"></i> BIỂU ĐỒ <i id="angne" class="fa-solid fa-angle-right"></i></p>
                    </a>
                    <ul class="chu-be" aria-expanded="false">
                        <li>
                            <a href="index.php?act=thongke"><i id="icn" class="fa-solid fa-chart-pie"></i> Biểu đồ thống kê</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Kết thúc thanh bên trái -->
        </div>
    </div>
    <!-- Kết thúc wrapper -->

    <!-- JS của các vendor -->
    <script src="assets\js\vendor.min.js"></script>
    <script src="assets\js\app.min.js"></script>
</body>

</html>
