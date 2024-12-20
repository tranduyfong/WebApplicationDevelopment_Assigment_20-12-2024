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
            $sql_get_id_username = "SELECT `MaNguoiDung` FROM `nguoidung` WHERE `TenDangNhap` = '$idUserName'";
            $result = mysqli_query($conn, $sql_get_id_username);
            $row = mysqli_fetch_assoc($result);
            $getIdUserName = $row['MaNguoiDung'];

            $sql_add_to_cart = "INSERT INTO `giohang`(`MaSanPham`, `SoLuongMua`, `KichCo`, `MaNguoiDung`) VALUES ('$currentIdProduct','$quantity','$size', '$getIdUserName')";
            mysqli_query($conn, $sql_add_to_cart);
            echo '<script>
                    alert("Thêm vào giỏ hàng thành công !");
                    window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=giohang";
                </script>';
        }
    }
?>