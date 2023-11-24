<body>
<div class="all2">
        <div class="logo2">
            <img src="images/th.jpg" alt="">
        </div>
        <h2>TÀI KHOẢN CỦA BẠN CHO MỌI THỨ NIKE</h2>
        <?php if (isset($thongbao)){ echo $thongbao . "<br>"; } ?>
       
        <!-- Form đăng nhập -->
        <form method="post" action="index.php?act=dangnhap">
            <input type="text" name="user" id="user" placeholder="Tên đăng nhập"><br>
            <input type="password" name="pass" id="pass" placeholder="Mật khẩu"><br>
            <div class="cs">
                Bằng cách đăng nhập, bạn đồng ý với<br><br>
                <a href="https://agreementservice.svs.nike.com/rest/agreement?agreementType=privacyPolicy&country=VN&language=en&mobileStatus=false&requestType=redirect&uxId=com.nike.commerce.nikedotcom.web">Chính sách quyền riêng tư</a> và <a href="https://agreementservice.svs.nike.com/rest/agreement?agreementType=termsOfUse&country=VN&language=en&mobileStatus=false&requestType=redirect&uxId=com.nike.commerce.nikedotcom.web">Điều khoản sử dụng của Nike.</a>
            </div>
            <div class="dn">
                <button type="submit" name="dangnhap">Đăng nhập</button>
            </div>
        </form>
        <div class="dk"> Bạn không nhớ mật khẩu? <a href="dk.php">Quên mật khẩu</a> </div>
        <div class="dk"> Bạn không phải thành viên Nike? <a href="index.php?act=dangky">Tham gia với chúng tôi</a> </div>
    </div>
</body>