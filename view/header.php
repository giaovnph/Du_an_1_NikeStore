<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/main.css">
    <link rel="stylesheet" href="view/css/log_in_out.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">

    <title>Document</title>
</head>

<body class="nikestore">
    <!-- Menu Top -->
    <header class="nikestore-header">
        <div class="header-top">
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
            <?php if($role==1){?>
                <a href="admin/index.php">
                <?php } ?>
                    <h4 class=" sign-btn">Hi, <?= $user ?><i id="sign-icon" class="fa-regular fa-user"></i></h4>
                </a>
                <span class="sign-gach">|</span>
                <div ><a class="sign-exit" href="index.php?act=thoat">Đăng xuất<i id="sign-icon" class="fa-solid fa-arrow-right-from-bracket"></i></a></div>
            <?php
            } else {
            ?>
                <a href="index.php?act=dangnhap">
                    <span class="sign-btn">Sign in <i id="sign-icon" class="fa-regular fa-user"></i></span>
                </a>
            <?php
            }
            ?>
        </div>
        <div class="header-bot">
            <div class="logo-nike"><a href="index.php"><img src="view/images/Logo.png" alt=""></a></div>
            <ul class="header-menu">
                <?php
                foreach ($listmenu as $menu) {
                    extract($menu);
                    $link = "index.php?act=sanpham&iddm=" . $id;
                    echo '<li><a href="' . $link . '">' . $name . '</a></li>';
                }
                ?>
            </ul>
            <div class="header-icon">
                <div class="search-box">
                    <form class="search-form" action="index.php?act=sanpham" method="post">
                        <button class="search-btn" type="submit">
                            <img class="search-icon" src="view/images/search-icon.png" alt="Search">
                        </button>
                        <input class="search-box__text" type="text" name="kyw" placeholder="Tìm kiếm" id="" required>
                    </form>
                </div>
                <div class="love-icon">
                    <a href=""><img src="view/images/heart-icon.png" alt=""></a>
                </div>
                <div class="cart-icon">
                    <a href=""><img src="view/images/cart-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </header>
