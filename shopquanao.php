<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán quần áo đắt nhất Việt Nam</title>
    <link rel="stylesheet" href="/BaiTapLon/style.css">

    <!-- Font html -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="main">
        <header>
            <div class="logo">
                <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=trangchu" >
                    <img src="/BaiTapLon/image/logo.webp" alt="logo-img">
                </a>
            </div>
            <div class="list-item">
                <div class="inner-list-item">
                    <div class="single-content">
                        <div>
                            <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=trangchu" >Trang chủ</a>
                        </div>
                    </div>
                    <div class="single-content">
                        <div>
                            <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=sanpham">Sản phẩm</a>
                        </div>
                    </div>
                    <div class="single-content">
                        <div>
                            <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=lienhe" >Liên hệ</a>
                        </div>
                    </div>
                    <div class="single-content">
                        <div>
                            <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=gioithieu" >Giới thiệu</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-select">
                <div class="inner-list-select">
                    <div class="single-icon">
                        <form action="http://localhost/BaiTapLon/shopquanao.php?page_layout=timkiem" method="post">
                            <div class="find-products">
                                <input type="text" name="tim_kiem" placeholder="Tìm kiếm theo tên sản phẩm...">
                                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="single-icon">
                        <a href="xulydangnhap.php">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </div>
                    <div class="single-icon">
                        <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=giohang">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <?php
            if(isset($_GET['page_layout'])) {
                switch($_GET['page_layout']) {
                    case 'trangchu':
                        include('trangchu.php');
                        break;
                    case 'uudai':
                        include('uudai.php');
                        break;
                    case 'lienhe':
                        include('lienhe.php');
                        break;
                    case 'sanpham':
                        include('sanpham.php');
                        break;
                    case 'gioithieu':
                        include('gioithieu.php');
                        break;
                    case 'dangnhap':
                        include('dangnhap.php');
                        break;
                    case 'dangky':
                        include('dangky.php');
                        break;
                    case 'timkiem':
                        include('timkiem.php');
                        break;
                    case 'taikhoan-khachhang':
                        include('taikhoan-khachhang.php');
                        break;
                    case 'taikhoan-admin':
                        include('taikhoan-admin.php');
                        break;
                    case 'chitiet-sanpham':
                        include('chitiet-sanpham.php');
                        break;
                    case 'giohang':
                        include('giohang.php');
                        break;
                    case 'xulyxoagiohangsanpham':
                        include('xulyxoagiohangsanpham.php');
                        break;
                }
            } else {
                include('trangchu.php');
            }
        ?>

        <div class="footer">
            <div class="main-footer">
                <div class="footer-info">
                    <div class="single-info">Địa chỉ: Số 18 - Phố Viên</div>
                    <div class="single-info">Số điện thoại: 088888888888</div>
                    <div class="single-info">Email: dongianchungtoilacho@gmail.com</div>
                </div>
                <div class="footer-policy">
                    <div class="name-title">CHÍNH SÁCH</div>
                    <div class="list-menu">
                        <ul>
                            <li><a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=trangchu" >Trang chủ</a></li>
                            <li><a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=uudai">Ưu đãi</a></li>
                            <li><a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=sanpham">Sản phẩm</a></li>
                            <li><a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=lienhe" >Liên hệ</a></li>
                            <li><a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=thongtin">Thông tin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="support-customer footer-policy">
                    <div class="name-title">HỖ TRỢ KHÁCH HÀNG</div>
                    <div class="list-menu">
                        <ul>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Điều khoản dịch vụ</a></li>
                            <li><a href="">Hướng dẫn kiểm tra đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social footer-policy">
                    <div class="name-title">MẠNG XÃ HỘI</div>
                    <div class="list-social">
                        <div class="single-social">
                            <a href="https://www.facebook.com/profile.php?id=100095034372630" >
                                <i class="fa-brands fa-facebook"></i>
                            </a></div>
                        <div class="single-social">
                            <a href="https://www.instagram.com/khongphaiech/" >
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="single-social">
                            <a href="">
                                <i class="fa-brands fa-github"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/BaiTapLon/script.js"></script>
</body>
</html>