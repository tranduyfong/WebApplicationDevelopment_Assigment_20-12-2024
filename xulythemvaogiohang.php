<?php
    include("connect.php");
    $currentIdProduct = $_GET['id'];
    session_start();
    if(empty($_SESSION['username'])) {
        echo '<script>
                    alert("Vui lòng đăng nhập tài khoản !");
                    window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=dangnhap";
                </script>';
    } else {
        if(empty($_POST['size'])) {
            echo '<script>
                        alert("Vui lòng chọn kích cỡ sản phẩm !");
                        window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='.$currentIdProduct.'";
                    </script>';
        } else {
            $size = $_POST['size'];
            $quantity = $_POST['quantity'];
            $idUserName = $_SESSION['username'];
            
            // Câu truy vấn kiểm tra xem còn số lượng sản phẩm không
            $sql_get_quantity_product = "SELECT SoLuongTonKho FROM chitietsanpham WHERE MaSanPham = '$currentIdProduct' AND KichCo = '$size'";
            $result_get_quantity_product = mysqli_query($conn, $sql_get_quantity_product);
            $row_get_quantity_product = mysqli_fetch_assoc($result_get_quantity_product);
            $final_result = intval($row_get_quantity_product['SoLuongTonKho']);

            //Kiem tra so luong dat san pham có lớn hơn số lượng tồn kho hay không
            if(intval($quantity) > $final_result) {
                echo '<script>
                        alert("Số lượng mua lớn hơn tồn kho hoặc sản phẩm đã hết hàng !");
                        window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='.$currentIdProduct.'";
                    </script>';
            } else {
                    // Thực hiện truy vấn lấy id hiện tại của tài khoản đăng nhập
                    $sql_get_id_username = "SELECT `MaNguoiDung` FROM `nguoidung` WHERE `TenDangNhap` = '$idUserName'";
                    $result = mysqli_query($conn, $sql_get_id_username);
                    $row = mysqli_fetch_assoc($result);
                    $getIdUserName = $row['MaNguoiDung'];

                    //Thực hiện truy vấn giá của sản phẩm
                    $sql_get_price_product = "SELECT GiaSanPham FROM sanpham WHERE MaSanPham = '$currentIdProduct'";
                    $result_price_product = mysqli_query($conn, $sql_get_price_product);
                    $row_price_product = mysqli_fetch_assoc($result_price_product);
                    $price = $row_price_product['GiaSanPham'];
                    $price = intval($price) * intval($quantity);

                    // Thực hiện truy vấn thêm vào giỏ hàng
                    $sql_add_to_cart = "INSERT INTO `giohang`(`MaSanPham`, `SoLuongMua`, `KichCo`, `MaNguoiDung`, `Gia`) VALUES ('$currentIdProduct','$quantity','$size', '$getIdUserName', '$price')";
                    mysqli_query($conn, $sql_add_to_cart);
                    echo '<script>
                            alert("Thêm vào giỏ hàng thành công !");
                            window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=giohang";
                        </script>';
            }
        }
    }
?>