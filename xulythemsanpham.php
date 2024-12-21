<?php
    include("connect.php");
    $nameProduct = $_POST['ten_san_pham'];
    $costProduct = $_POST['gia_san_pham'];
    $costProduct = intval($costProduct);
    $infoProduct = $_POST['thong_tin_san_pham'];
    $quantityProduct = $_POST['so_luong_ton_kho'];
    $quantity = intval($quantityProduct);
    $productFile = $_POST['productFile'];
    $sizeProduct = $_POST['size'];
    $typeProduct = $_POST['loai'];

    if(is_numeric(intval($costProduct)) && is_numeric(intval($quantityProduct))) {
        // Chat GPT
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/BaiTapLon/image/';
            $file = $_FILES['productFile'];
            // Kiểm tra và xử lý file upload
            if ($file['error'] === UPLOAD_ERR_OK) {
                $fileName = basename($file['name']);
                $targetFile = $uploadDir . $fileName;
                // Lưu file vào thư mục
                if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                    $targetFile = substr($targetFile, 15);

                    $sql = "INSERT INTO `sanpham`(`TenSanPham`, `GiaSanPham`, `ThongTinSanPham`, `filePath`, `LoaiSanPham`) VALUES ('$nameProduct','$costProduct','$infoProduct','$targetFile', '$typeProduct')";
                    mysqli_query($conn, $sql);
                    $sql_get_id = "SELECT MaSanPham FROM SanPham WHERE TenSanPham = '$nameProduct'";
                    $result_get_id = mysqli_query($conn, $sql_get_id);
                    $row_get_id = mysqli_fetch_assoc($result_get_id);
                    $idProduct = $row_get_id['MaSanPham'];
                    $sql_2 = "INSERT INTO `chitietsanpham`(`MaSanPham`, `KichCo`, `SoLuongTonKho`) VALUES ('$idProduct','$sizeProduct','$quantity')";
                    mysqli_query($conn, $sql_2);
                } else {
                    echo "Lỗi khi upload file.";
                }
            } else {
                echo "Lỗi upload: " . $file['error'];
            }
        } else {
            echo "Phương thức không hợp lệ.";
        }
        
        echo '<script>
                    alert("Thêm sản phẩm thành công");
                    window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-admin&inner_layout=themsanpham";
                </script>';
    }
    
?>