<?php
    if(empty($_POST['ho_ten']) || empty($_POST['email']) || empty($_POST['so_dien_thoai']) || empty($_POST['diachi'])) {
        echo 
                '<script>
                alert("Vui lòng nhập đầy đủ thông tin !");
                window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=thongtinmuahang&id='.$_GET['id'].'&id_user='.$_GET['id_user'].'";
                </script>';
    } else {
        include("connect.php");
        $fullName = $_POST['ho_ten'];
        $email = $_POST['email'];
        $numberPhone = $_POST['so_dien_thoai'];
        $address = $_POST['diachi'];

        $currentIdProduct = $_GET['id'];
        $currentIdUser = $_GET['id_user'];
        $currentIdCart = $_GET['id_cart'];
        $currentSizeProduct = $_GET['size_product'];

        // Truy vấn lấy số lượng mua
        $sql_get_quantity = "SELECT * FROM giohang WHERE `MaGioHang` = '$currentIdCart'";
        $result_get_quantity = mysqli_query($conn, $sql_get_quantity);
        $row_get_quantity_product = mysqli_fetch_assoc($result_get_quantity);
        $quantity = $row_get_quantity_product['SoLuongMua'];
        $price = $row_get_quantity_product['Gia'];
        $price = intval($price);

        $sql = "INSERT INTO `dathang`(`MaNguoiDung`, `DiaChiDatHang`, `SoDienThoai`, `NgayDatHang`, `Email`, `MaSanPham`, `KichCo`, `SoLuongDatHang`, `GiaTien`) VALUES ('$currentIdUser','$address','$numberPhone','".date("Y-m-d H:i:s")."','$email','$currentIdProduct','$currentSizeProduct', '$quantity', '$price')";
        
        mysqli_query($conn,  $sql);

        //Update số lượng sản phẩm còn lại
        $sql_before = "SELECT * FROM chitietsanpham WHERE `MaSanPham` = '$currentIdProduct' AND `KichCo` = '$currentSizeProduct'";
        $result_before = mysqli_query($conn, $sql_before);
        $row_before = mysqli_fetch_assoc($result_before);

        $quantity_before = intval($row_before['SoLuongTonKho']);
        $quantity_after = $quantity_before - intval($quantity);

        $sql_update = "UPDATE `chitietsanpham` SET `SoLuongTonKho`='$quantity_after' WHERE `MaSanPham`='$currentIdProduct' AND `KichCo` = '$currentSizeProduct'";
        mysqli_query($conn, $sql_update);

        echo 
                '<script>
                alert("Mua hàng thành công !");
                window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=thongtindonhang";
                </script>';
    }
?>