<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="show-position">
            <span>Tạo tài khoản</span>
        </div>

        <div class="register">
            <div class="inner-register">
                <div class="title">
                    <span>đăng ký tài khoản</span>
                </div>
                <div class="login-account">
                    <span>Bạn đã có tài khoản ?</span>
                    <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=dangnhap">Đăng nhập tại đây</a>
                </div>
                <div>
                    <h3>THÔNG TIN CÁ NHÂN</h3>
                </div>
                <div class="form-register">
                    <form action="xulydangky.php" method="post">
                        Họ:
                        <div class="single-input">
                            <input type="text" name="ho-dem" placeholder="Nhập họ*">
                        </div>
                        Tên:
                        <div class="single-input">
                            <input type="text" name="ten" placeholder="Nhập tên*">
                        </div>
                        Số điện thoại:
                        <div class="single-input">
                            <input type="text" name="so-dien-thoai" placeholder="Nhập số điện thoại*">
                        </div>
                        Email:
                        <div class="single-input">
                            <input type="email" name="email" placeholder="Nhập email*">
                        </div>
                        Tên đăng nhập:
                        <div class="single-input">
                            <input type="text" name="ten-dang-nhap" placeholder="Nhập tên đăng nhập*">
                        </div>
                        Mật khẩu:
                        <div class="single-input">
                            <input type="password" name="mat-khau" placeholder="Nhập mật khẩu*">
                        </div>
                        <div class="single-input">
                            <input type="submit" value="Đăng ký" id="login-button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>