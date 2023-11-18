
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
</head>

<body>
  <header>
    <div class="mn">
      <div class="logo">
        <a href="index.php"><img src="images/th.jpg" alt="" /></a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="danhsach.php">Mới và nổi bật</a></li>
          <li><a href="#">Nam</a></li>
          <li><a href="#">Nữ</a></li>
          <li><a href="#">Trẻ em</a></li>
        </ul>
      </div>

      <form method="post">
        <div class="tk">
          <div class="search-box" style="margin-left: 120px;">
            <div style="border-right: 1px solid gray"></div>
            <div style="padding-left: 20px">
              <input id="search-input" placeholder="Tìm kiếm" name="tk" type="text" />
            </div>
            <div>
              <button id="search-button" type="submit">
                <img src="images/timkiem.png" alt="" width="20px" height="20px" style="margin-right: 20px;" />
              </button>
            </div>
          </div>

          <div>
            <a href="index.php?act=dangnhap">
              <img src="images/user.png" alt="" width="70px" height="45px" style="margin-left: 70px; padding-top:5px;" />
            </a>
            <?php if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
              $user = $_SESSION['user']['user'];
            ?>
              <p style="margin-left: 60px;">Xin chào! <a href=""><?= htmlspecialchars($user) ?></a></p>
            <?php } ?>
          </div>
        </div>
      </form>
    </div>
  </header>
</body>

</html>
