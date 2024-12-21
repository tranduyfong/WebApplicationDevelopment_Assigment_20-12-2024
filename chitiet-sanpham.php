<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("connect.php");
        $idProductCurrent = $_GET['id'];
        $sql = "SELECT * FROM `sanpham` WHERE `MaSanPham` = '$idProductCurrent'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="show-position">
            <span><?php echo $row['TenSanPham']; ?></span>
        </div>
    
        <div class="product">
            <div class="inner-product">
                <div class="image-product">
                    <img src="<?php echo $row['filePath'] ?>" alt="">
                </div>
                <div class="main-product">
                    <div class="name-product">
                        <?php echo $row['TenSanPham']; ?>
                    </div>
                    <div class="quantity-sold">
                        Đã bán <span><?php echo $row['SoLuongBan'] ?></span> sản phẩm
                        <img src="/BaiTapLon/image/menu_icon_3.png" alt="">
                    </div>
                    <div class="price">
                        <span><?php echo substr(substr(strval($row['GiaSanPham']), 0, 6), 0, 3).".". substr(substr(strval($row['GiaSanPham']), 0, 6), 3, 6)."₫" ?></span>
                    </div>
                    <div class="promotion">
                        <div>
                            <img src="/BaiTapLon/image/icon-product-promotion.webp" alt="">
                            Khuyến mại - Ưu đãi
                        </div>
                        <ul>
                            <li>Chuyển khoản với đơn hàng từ 500k trở lên (Bắt buộc)</li>
                            <li>Đồng giá ship toàn quốc 30k</li>
                            <li>Hỗ trợ trả lời thắc mắc qua fanpage chính thức</li>
                            <li>Khuyến mãi trực tiếp trên giá sản phẩm</li>
                            <li>Đổi trả nếu sản phẩm lỗi bất kì</li>
                        </ul>
                    </div>
                    <div class="form-buy-product">
                        <div class="title">Chọn kích cỡ</div>
                        <form action="xulythemvaogiohang.php?id=<?php echo $idProductCurrent ?>" method="post">
                            <div class="select-size" >
                                <div class="size-button" id="size_M">
                                    <input type="radio" id="sizeM" name="size" value="M" >
                                    <label for="sizeM">
                                        <span>M</span>
                                    </label>
                                </div>
                                <div class="size-button" id="size_L">
                                    <input type="radio" id="sizeL" name="size" value="L" >
                                    <label for="sizeL">
                                        <span>L</span>
                                    </label>
                                </div>
                                <div class="size-button" id="size_XL">
                                    <input type="radio" id="sizeXL" name="size" value="XL" >
                                    <label for="sizeXL">
                                        <span>XL</span>
                                    </label>
                                </div>
                            </div>
    
                            <div class="quantity-buy">
                                <div class="inner-quantity-buy">
                                    <div class="single-crease" id="decrease-quantity">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input id="quantity-number" name="quantity" type="number" value="1" readonly>
                                    <div class="single-crease" id="increase-quantity">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <div class="button-buy">
                                    <button>Thêm vào giỏ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="take-care-customer">
                        Hotline: <span>0345678910JQKA</span>(7:00-23:00)
                    </div>
                    <div class="policy-product">
                        <div class="single-content">
                            <img src="/BaiTapLon/image/policy_product_image_1.webp" alt="">
                            <span>Giao hàng toàn quốc</span>
                        </div>
                        <div class="single-content">
                            <img src="/BaiTapLon/image/policy_product_image_3.webp" alt="">
                            <span>Sản phẩm chính hãng</span>
                        </div>
                        <div class="single-content">
                            <img src="/BaiTapLon/image/policy_product_image_2.webp" alt="">
                            <span>Ưu đãi hấp dẫn</span>
                        </div>
                    </div>
                    <div class="information-policy-product">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Mô tả sản phẩm
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <div class="accordion-content">
                              <p><?php echo $row['ThongTinSanPham']; ?></p>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <button class="accordion-header">
                                Chính sách giao hàng
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <div class="accordion-content">
                              <p>Thông tin về chính sách giao hàng...</p>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <button class="accordion-header">
                                Chính sách đổi trả
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <div class="accordion-content">
                                <br><br><strong>1. Điều kiện đổi trả</strong><br> <br>

                                Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay tại thời điểm giao/nhận hàng trong những trường hợp sau: <br><br>
                                
                                <ul>
                                    <li>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</li><br>
                                    <li>Không đủ số lượng, không đủ bộ như trong đơn hàng. <br><br></li>
                                    <li>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…<br><br></li>
                                </ul>
                                 Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa. 
                                
                                
                                <br><br>
                                <strong>2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả</strong><br><br>
                                
                                <ul>
                                    <li>Thời gian thông báo đổi trả: trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, quà tặng hoặc bể vỡ.</li><br>
                                    <li>Thời gian gửi chuyển trả sản phẩm: trong vòng 14 ngày kể từ khi nhận sản phẩm.</li><br>
                                    <li>Địa điểm đổi trả sản phẩm: Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của chúng tôi hoặc chuyển qua đường bưu điện.</li><br>
                                </ul>
                                Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng của chúng tôi. <br>                               
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other-products">
            <div class="inner-other-products">
                <div class="title">
                    <h1>Tham khảo những sản phẩm khác</h1>
                </div>
                <div class="products">
                    <?php
                        include('connect.php');
                        $sql_more_video = "SELECT * FROM `sanpham` ORDER BY `GiaSanPham` DESC LIMIT 5";
                        $result_more_video = mysqli_query($conn, $sql_more_video);
                        while($row_more_video = mysqli_fetch_array($result_more_video)) {
                            echo '
                                <div>
                                    <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='. $row_more_video['MaSanPham'] .'"><img src='. $row_more_video['filePath'] .' alt=""></a>
                                    <div class="name-product">
                                    <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='. $row_more_video['MaSanPham'] .'">'. $row_more_video['TenSanPham'] . '</a>
                                    </div>
                                    <div class="cost-product">
                                    <span> '. substr(substr(strval($row_more_video['GiaSanPham']), 0, 6), 0, 3).".". substr(substr(strval($row_more_video['GiaSanPham']), 0, 6), 3, 6)."₫". '</span>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
</body>
</html>