<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="show-position">
            <span>Tài khoản</span>
        </div>
        <div class="layout-username">
            <div class="list-user-choice">
                <div class="inner-list-user-choice">
                    <div class="title">
                        <span class="hello">Xin chào <span>
                            <?php
                                include("connect.php");
                                session_start();
                                $sql_name = "SELECT TenNguoiDung FROM `nguoidung` WHERE `TenDangNhap` = '{$_SESSION['username']}'";
                                $result = mysqli_fetch_assoc(mysqli_query($conn, $sql_name));
                                echo $result['TenNguoiDung'];
                            ?>
                        </span> !</span>
                    </div>
                    <div class="list">
                        <div class="list-choice">
                            <div>
                                <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-admin&inner_layout=themsanpham"><span>Thêm sản phẩm</span></a>
                            </div>
                            <div>
                                <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-admin&inner_layout=xoasanpham"><span>Xóa sản phẩm</span></a>
                            </div>
                            <div>
                                <a href="xulydangxuat.php"><span>Đăng xuất</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-user-choice">
                <div class="inner-main-user-choice">
                    <?php
                        if(isset($_GET['inner_layout'])){
                            switch($_GET['inner_layout']){
                                case 'themsanpham':
                                    include('themsanpham.php');
                                    break;  
                                case 'xoasanpham':
                                    include('xoasanpham.php');
                                    break; 
                            }
                        } else {
                            include('themsanpham.php');
                        }
                    ?>
                </div>
            </div>
        </div>
</body>
</html>