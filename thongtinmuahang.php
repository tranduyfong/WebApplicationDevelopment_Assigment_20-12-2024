<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .map-shop {
            text-align: center;
        }
        .map-shop .product {
            width: 100%;
            height: 500px;
            margin-top: 0;
            display: flex;
            position: relative;
            justify-content: space-between;
            margin-left: 40px;
        }
        .map-shop .product .left {
            width: 40%;
            height: 100%;
            margin-left: 30px;
        }
        .map-shop .product .left img {
            width: 80%;
            height: 80%;
            margin-top: 20px;
        }

        .map-shop .product .right {
            width: 50%;
            height: 100%;
            top: 0;
            text-align: left;
        }
        .map-shop .product .right div {
            margin-bottom: 20px;
        }
     </style>
</head>
<body>
        <div class="show-position">
            <span>Đặt hàng</span>
        </div>
        <div class="main-support">
            <div class="inner-main">
                <div class="left-inner-main">
                    <div class="information">
                        <h1>Thông tin đặt hàng</h1>
                        <div>Vui lòng điền đúng thông tin đặt hàng, chúng tôi sẽ gọi điện để xác nhận đơn hàng của bạn !</div>
                    </div>
                    <?php 
                        include("connect.php");
                        $currentProduct = $_GET['id'];
                        $getIdUserName = $_GET['id_user'];
                        $getIdCart = $_GET['id_cart'];

                        $sql = "SELECT * FROM giohang JOIN sanpham ON giohang.MaSanPham = sanpham.MaSanPham WHERE giohang.MaNguoiDung = '$getIdUserName' AND sanpham.MaSanPham = $currentProduct AND giohang.MaGioHang = $getIdCart ";
                        $result_get_product = mysqli_query($conn, $sql);
                        $row_get_product = mysqli_fetch_assoc($result_get_product);
                        $size_product = $_GET['size_product'];
                    ?>
                    <div class="form-to-contact">
                        <h3>Thông tin</h3>
                        <form action="http://localhost/BaiTapLon/shopquanao.php?page_layout=xulythongtinmuahang&id=<?php echo $row_get_product['MaSanPham'] ?>&id_user=<?php echo $getIdUserName ?>&id_cart=<?php echo $getIdCart ?>&size_product=<?php echo $size_product ?>" class="inner-form-to-contact" method="post">
                            <input type="text" name="ho_ten" id="fullName" placeholder="Họ tên*">
                            <input type="text" name="email" id="email" placeholder="Email*">
                            <input type="text" name="so_dien_thoai" id="numberPhone" placeholder="Số điện thoại*">
                            <textarea name="diachi" id="more-infomation" placeholder="Nhập địa chỉ nhận hàng*"></textarea>
                            <button>Mua hàng</button>
                        </form>
                    </div>
                </div>
                <div class="map-shop">
                    <h1>Thông tin đơn hàng</h1>
                    
                    <div class="product">
                        <div class="left">
                            <img src="<?php echo $row_get_product['filePath'] ?>" alt="">
                        </div>
                        <div class="right">
                            <h2><?php echo $row_get_product['TenSanPham'] ?></h2>
                            <div>Số lượng: <?php echo $row_get_product['SoLuongMua'] ?></div>
                            <div>Size: <?php echo $row_get_product['KichCo'] ?></div>
                            <div>Giá tổng: <?php echo number_format($row_get_product['Gia'], 0, ',', '.').'đ' ?> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</body>
</html>