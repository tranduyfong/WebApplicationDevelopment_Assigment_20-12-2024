<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="banner">
            <img src="/BaiTapLon/image/slider_1.webp" alt="">
        </div>

        <div class="all-item">
            <div class="header-title">
                <h1>Tất cả sản phẩm</h1>
            </div>
            <div class="inner-all-item">
                <?php
                    require("connect.php");
                    $sql = "SELECT * FROM `sanpham`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if(isset($row)) {
                            echo 
                                '<div>
                                    <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='. $row['MaSanPham'] .'"><img src='. $row['filePath'] .' alt=""></a>
                                    <div class="name-product">
                                    <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='. $row['MaSanPham'] .'">'. $row['TenSanPham'] . '</a>
                                    </div>
                                    <div class="cost-product">
                                    <span> '. substr(substr(strval($row['GiaSanPham']), 0, 6), 0, 3).".". substr(substr(strval($row['GiaSanPham']), 0, 6), 3, 6)."₫". '</span>
                                    </div>
                                </div>';
                        }
                    }
                ?>
            </div>
        </div>

        <div class="model-img">

        </div>

        <div class="seeding">
            <div class="title-seeding">
                <h1>Khách hàng đã nói gì ?</h1>
            </div>
            <div class="list-seeding">
                <div class="item">
                    <div class="left">
                        <div class="name-customer">
                            <span>Anh Phạm Quang Hiển</span>
                        </div>
                        <div class="seeding-customer">
                            <span>Sản phẩm rất đẹp, giá cả hợp lý, tôi rất thích sản phẩm này !</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://humg.edu.vn/content/gioi-thieu/PublishingImages/GioiThieu/CoCauTochuc/CacKhoa/CNTT/TKT/pham%20quang%20hien.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="name-customer">
                            <span>Anh Đặng Văn Minh</span>
                        </div>
                        <div class="seeding-customer">
                            <span>No skill, no cry</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://scontent.fhan20-1.fna.fbcdn.net/v/t39.30808-6/440954586_1209281090481246_3975280184946684497_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGOZz_gAun1UXkqAKgWj2DLOFO1RtK_lqY4U7VG0r-Wpv69GnPPsZLjX9X-G5TgyH5B9JKNjE0vobr4kZv6aqno&_nc_ohc=lx_doAR57vgQ7kNvgEPhoww&_nc_zt=23&_nc_ht=scontent.fhan20-1.fna&_nc_gid=A_ICtgO5qrBzjkSLToDnA8I&oh=00_AYDvkzJ1Ort2ylz5TRIY467GsyvIXE6kqBm2hPE37nEvqQ&oe=672ED6E4" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="name-customer">
                            <span>Đầu bếp Công Phượng</span>
                        </div>
                        <div class="seeding-customer">
                            <span>Gà kia ai rán mà giòn. Cam kia ai bổ mà mòn cả dao</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQSDyM1BOq3G4YnfUi1idQWSre-zKHy4l_8w&s" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="shop-information">

        </div>
</body>
</html>