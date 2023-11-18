<body>
    <div class="all2">
        <div class="logo2">
            <img src="images/th.jpg" alt="">
        </div>
        <h2>TRỞ THÀNH THÀNH VIÊN NIKE</h2>
        <?php if (isset($thongbao)) { echo $thongbao . "<br>"; } ?>

        <!-- Form đăng ký -->
        <form method="post" action="index.php?act=dangky">
            <input type="text" name="user" placeholder="Tên đăng nhập"><br>
            <input type="password" name="pass" placeholder="Mật khẩu"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="text" name="sdt" placeholder="Số điện thoại"><br>


            <div class="cs">
                Bằng cách đăng ký, bạn đồng ý với<br>
                <a href="https://agreementservice.svs.nike.com/rest/agreement?agreementType=privacyPolicy&country=VN&language=en&mobileStatus=false&requestType=redirect&uxId=com.nike.commerce.nikedotcom.web">Chính sách quyền riêng tư</a>
                và
                <a href="https://agreementservice.svs.nike.com/rest/agreement?agreementType=termsOfUse&country=VN&language=en&mobileStatus=false&requestType=redirect&uxId=com.nike.commerce.nikedotcom.web">Điều khoản sử dụng của Nike.</a>
            </div>
            <div class="dn">
                <div class="dangky">
                    <button type="submit" name="dangky">Đăng Ký</button>
                </div>
            </div>
        </form>
        <div class="dk">Đã là thành viên hay chưa? <a href="index.php?act=dangnhap">Đăng nhập.</a> </div>
    </div>
</body>