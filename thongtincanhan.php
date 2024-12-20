<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .single-info {
            margin-bottom: 20px;
            font-size: 150%;
            position: relative;
            display: flex;
            gap: 30px;
            text-align: center;
        }
        .left {
            margin-left: 20%;
        }
        .right {
            position: absolute;
            right: 20%;
        }
    </style>
</head>
<body>
    <?php
        include("connect.php");
        $username = $_SESSION['username'];

        $sql = "SELECT * FROM `nguoidung` WHERE `tendangnhap` = '$username'";
        $result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
    ?>
                    <div class="content">
                        <h1>Thông tin người dùng    </h1>
                    </div>
                    <div class="single-info">
                        <span class="left">Họ và tên: </span> 
                        <span class="right"><?php echo $result['TenNguoiDung']; ?></span>
                    </div>
                    <div class="single-info">
                        <span class="left">Email: </span> 
                        <span class="right"><?php echo $result['Email']; ?></span>
                    </div>
                    <div class="single-info">
                        <span class="left">Số điện thoại: </span> 
                        <span class="right"><?php echo $result['SoDienThoai']; ?></span>
                    </div>
                    <div class="single-info">
                        <span class="left">Tên đăng nhập: </span> 
                        <span class="right"><?php echo $result['TenDangNhap']; ?></span>
                    </div>
                    <div class="single-info">
                        <span class="left">Mật khẩu: </span> 
                        <span class="right"><?php for($i = 1; $i <= strlen($result['MatKhau']); $i++) {echo "*";} ?></span>
                    </div>
</body>
</html>