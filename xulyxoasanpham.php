<?php
    include("connect.php");
    $idProduct = $_POST['ma_san_pham'];

    if(isset($idProduct)){
        $sql_checked = "SELECT * FROM `sanpham` WHERE `MaSanPham` = '$idProduct'";
        $result = mysqli_query($conn, $sql_checked);

        // Check tồn tại mã sản phẩm đó hay không
        if (mysqli_num_rows($result) > 0) {
            $sql_deleted = "DELETE FROM `sanpham` WHERE `MaSanPham` = '$idProduct'";
            mysqli_query($conn, $sql_deleted);

            echo '<script>
                    alert("Xóa sản phẩm thành công");
                    window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-admin&inner_layout=xoasanpham";
                </script>';
        } else {
            echo '<script>
                alert("Không tồn tại mã sản phẩm đó");
                window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-admin&inner_layout=xoasanpham";
                </script>';
        }
    }
?>