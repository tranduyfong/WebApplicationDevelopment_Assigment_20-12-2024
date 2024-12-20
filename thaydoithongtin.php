<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="content">
                        <h1>Thay đổi thông tin</h1>
                    </div>
                    <div class="form-add-products">
                        <form action="xulythaydoithongtin.php" method="post" enctype="multipart/form-data">
                            <div class="single-info">
                                <span>Tên người dùng:</span>
                                <input type="text" name="ten_nguoi_dung">
                            </div>
                            <div class="single-info">
                                <span>Số điện thoại:</span>
                                <input type="text" name="so_dien_thoai">
                            </div>
                            <div class="single-info">
                                <span>Email:</span>
                                <input type="text" name="email">
                            </div>
                            <div class="single-info" id="box">
                                <span>Tên đăng nhập:</span>
                                <input type="text" name="ten_dang_nhap">
                            </div>
                            <div class="single-info">
                                <span>Mật khẩu:</span>
                                <input type="password" name="mat_khau">
                            </div>
                            <div class="single-info">
                                <span>Xác nhận mật khẩu:</span>
                                <input type="password" name="xac_nhan_mat_khau" required>
                            </div>
                            <div class="single-info">
                                <div>
                                    <button>Thay đổi thông tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
</body>
</html>