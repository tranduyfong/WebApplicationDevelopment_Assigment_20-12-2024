<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="show-position">
            <span>Giỏ hàng</span>
        </div>

        <div class="cart">
            <div class="inner-cart">
                <?php
                    include("connect.php");
                    session_start();
                    // Lay id phien dang nhap hien tai
                    if(empty($_SESSION['username'])) {
                        include('giohangtrong.php');
                    } else {
                    $idUserName = $_SESSION['username'];
                    $sql_get_id_username = "SELECT `MaNguoiDung` FROM `nguoidung` WHERE `TenDangNhap` = '$idUserName'";
                    $result = mysqli_query($conn, $sql_get_id_username);
                    $row = mysqli_fetch_assoc($result);
                    $getIdUserName = $row['MaNguoiDung'];

                    $sql_checked_num_rows = "SELECT * FROM `giohang` WHERE `MaNguoiDung` = '$getIdUserName'";
                    
                    $result = mysqli_query($conn, $sql_checked_num_rows);
                    if((mysqli_num_rows($result) < 1) || empty($_SESSION['username'])) {
                        include('giohangtrong.php');
                    } else {
                        include('giohangdacosanpham.php');
                    }
                }
                ?>
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