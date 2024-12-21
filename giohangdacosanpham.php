<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="inside-cart">
        <div class="left-inner">
        <?php
            include("connect.php");
            $idUserName = $_SESSION['username'];
            $sql_get_id_username = "SELECT `MaNguoiDung` FROM `nguoidung` WHERE `TenDangNhap` = '$idUserName'";
            $result = mysqli_query($conn, $sql_get_id_username);
            $row = mysqli_fetch_assoc($result);
            $getIdUserName = $row['MaNguoiDung'];

            $sql = "SELECT * FROM giohang JOIN sanpham ON giohang.MaSanPham = sanpham.MaSanPham WHERE giohang.MaNguoiDung = '$getIdUserName'";
            $result_product = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result_product)) {
                echo '
                    <div class="single-product">
                    <div class="cancel">
                                <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=xulyxoagiohangsanpham&id='.$row['MaGioHang'].'">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </div>
                            <div class="img-product">
                                <img src="'.$row['filePath'].'" alt="">
                            </div>
                            <div class="desciption-product-ordered">
                                <div id="name">'.$row['TenSanPham'].'</div>
                                <div id="size">Size: '.$row['KichCo'].'</div>
                                <div id="quantity">Số lượng mua: '.$row['SoLuongMua'].'</div>
                            </div>
                            <div class="product-price">
                                Giá bán: <span>'.number_format($row['Gia'], 0, ',', '.')."₫".'</span>
                            </div>
                            <div class="product-choice">
                                <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=thongtinmuahang&id='.$row['MaSanPham'].'&id_user='.$getIdUserName.'&id_cart='.$row['MaGioHang'].'&size_product='.$row['KichCo'].'" id="buy-now">Mua ngay</a>
                                <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='.$row['MaSanPham'].'" id="more-information">Xem thông tin</a>
                            </div>
                        </div>
                ';
            }
        ?>
                    </div>
                    <div class="right-inner">
                        <div>
                            <h1 style="color: #0056b3;">LỜI CẢM ƠN !</h1>
                            <p>Chúng tôi xin chân thành cảm ơn các bạn đã tin tưởng và ủng hộ sản phẩm, mọi lợi nhuận của sản phẩm chúng tôi sẽ đóng góp toàn bộ cho Mặt trận tổ quốc Việt Nam và các khoản ủng hộ khác !</p>
                            <p>Mặt trận Tổ quốc Việt Nam <span style="color: #228B22;">Vietcombank</span> <br>
                            Tên Tài khoản: Mặt trận Tổ quốc Việt Nam - Ban Cứu trợ Trung ương <br>
                            Số Tài khoản: 0011.00.1932418</p>
                            <p>Sở giao dịch Ngân hàng Thương mại cổ phần Ngoại thương Việt Nam - <span style="color: #228B22;">Vietcombank</span></p>
                            <p style="margin-top: 50px; color: red;">Hoang Sa - Truong Sa belong to Viet Nam !</p>
                            <p style="color: #4682B4">From Mixi with love <3 </p>
                </div>
        </div>
    </div>
</body>
</html>