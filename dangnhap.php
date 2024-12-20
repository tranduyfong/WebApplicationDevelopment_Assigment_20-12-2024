<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="show-position">
            <span>đăng nhập</span>
        </div>

        <div class="login">
            <div class="inner-login">
                <div class="title">
                    <span>đăng nhập tài khoản</span>
                </div>
                <div class="create-account">
                    <span>Bạn chưa có tài khoản ?</span>
                    <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=dangky">Đăng ký tại đây</a>
                </div>
                <div class="form-login">
                    <form action="xulytaikhoan.php" method="post">
                        Nhập tài khoản:
                        <div class="single-input">
                            <input type="text" name="tai-khoan" placeholder="Nhập email*">
                        </div>
                        Mật khẩu:
                        <div class="single-input">
                            <input type="password" name="mat-khau" placeholder="Nhập mật khẩu*">
                        </div>
                        <div class="single-input">
                            <input type="submit" value="Đăng nhập" id="login-button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>