<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .banner {
            display: flex;
            position: relative;
            height: 1000px;
        }
        .banner-image {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        }
        .banner-image.active {
        opacity: 1;
        }
        .shop-information {
            width: 100%;
            height: max-content;
        }
        .shop-information img {
            width: 100%;
            height: 100%;
        }
        .shop-information div {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
        <div class="banner">
            <img src="/BaiTapLon/image/slider_1.webp" class="banner-image active" alt="">
            <img src="/BaiTapLon/image/slide-img1.webp" class="banner-image" alt="">
            <img src="/BaiTapLon/image/slide-img4.webp" class="banner-image" alt="">
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
                            <span>Anh Trần Văn Mười</span>
                        </div>
                        <div class="seeding-customer">
                            <span>Sản phẩm rất đẹp, tôi đã mua tặng thêm cho bạn Bảy của tôi, tôi hy vọng anh Bảy thích sản phẩm đó !</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://media2.giphy.com/media/fllmkwju6wERV8yqY8/giphy.gif?cid=6c09b952s8l0kwg5qyp0pe51e6liuh99tamch1mmhrp8dq96&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=g" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="name-customer">
                            <span>Anh Đàm Vĩnh Hưng</span>
                        </div>
                        <div class="seeding-customer">
                            <span>Thực sự rất hài lòng với sản phẩm này! Chất lượng vượt xa mong đợi, thiết kế tinh tế và sử dụng cực kỳ tiện lợi. Dịch vụ chăm sóc khách hàng cũng rất chuyên nghiệp. Chắc chắn sẽ tiếp tục ủng hộ trong tương lai !</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://media1.tenor.com/m/-KMoQw0x64cAAAAd/%C4%91%C3%A0m-v%C4%A9nh-h%C6%B0ng-meme.gif" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="name-customer">
                            <span>Chị Trần Hà Linh</span>
                        </div>
                        <div class="seeding-customer">
                            <span>Sản phẩm mặc rất thoáng mát, co giãn 4 chiều, 100% cotton nên mặc rất thoải mái !</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpdGiwvCyqKxWrIjC3UOJjVvzDX0kVz01p7w&s" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="name-customer">
                            <span>Anh Nguyễn Văn Bảy</span>
                        </div>
                        <div class="seeding-customer">
                            <span>Sản phẩm này tôi được anh Mười tặng, sản phẩm rất chỉnh chu, thoáng mát và giá cả rất hợp lý !</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://media.tenor.com/SIAiO7He2f4AAAAM/ronaldo-meme-ronaldo.gif" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="name-customer">
                            <span>Sư thầy Khạp Sa Qua Kha</span>
                        </div>
                        <div class="seeding-customer">
                            <span>ผลิตภัณฑ์คุณภาพ ฉันใช้เวลามากกว่าหนึ่งเดือนกว่าจะได้ผลิตภัณฑ์นี้กลับบ้าน ฉันชอบมัน!</span>
                        </div>
                    </div>
                    <div class="img-customer">
                        <img src="https://ttol.vietnamnetjsc.vn//2017/09/20/15/44/nha-su-thai-lan-co-bap-cuon-cuon-gay-bao-mang_3.jpg" alt="">
                    </div>
                </div>
                
            </div>
        </div>

        <div class="shop-information">
            <div>
                <h1>CHAU BUI - WEB ASSIGMENT NGO NGOC ANH</h1>
            </div>
            <img src="/BaiTapLon/image/chau-bui.png" alt="">
        </div>
        <script>
            const images = document.querySelectorAll('.banner-image');
            let currentIndex = 0;

            function changeImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
            }

            setInterval(changeImage, 7000);
        </script>
</body>
</html>