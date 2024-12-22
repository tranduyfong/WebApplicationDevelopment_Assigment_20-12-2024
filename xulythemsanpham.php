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

                    // Câu lệnh truy vấn check tồn tại tên sản phẩm 
                    $sql_check_product_name = "SELECT MaSanPham FROM sanpham WHERE TenSanPham = '$nameProduct'";
                    $result_check_product_name = mysqli_query($conn, $sql_check_product_name);
                    $variable_checked_product = mysqli_num_rows($result_check_product_name) > 0;
                    
                    // Check xem tồn tại sản phẩm với size mình chọn
                    $variable_checked_product_size = false;
                    if ($variable_checked_product) {
                        $row_check_product_name = mysqli_fetch_assoc($result_check_product_name);
                        $idProduct = $row_check_product_name['MaSanPham'];
                    
                        $sql_check_size = "SELECT KichCo FROM chitietsanpham WHERE MaSanPham = '$idProduct' AND KichCo = '$sizeProduct'";
                        $result_check_size = mysqli_query($conn, $sql_check_size);
                        $variable_checked_product_size = mysqli_num_rows($result_check_size) > 0;
                    }
                    
                    // Kiểm tra
                    if ($variable_checked_product) {
                        if ($variable_checked_product_size) { // Nếu đã tồn tại tên và size, thực hiện update số lượng
                            $sql_updated = "UPDATE `chitietsanpham` SET `SoLuongTonKho`='$quantityProduct' WHERE `MaSanPham` = '$idProduct' AND `KichCo` = '$sizeProduct'";
                            mysqli_query($conn, $sql_updated);
                        } else { // Nếu đã tồn tại tên mà chưa tồn tại size, thực hiện thêm size và số lượng cho bảng chitietdonhang
                            $sql_add_size = "INSERT INTO `chitietsanpham`(`MaSanPham`, `KichCo`, `SoLuongTonKho`) VALUES ('$idProduct','$sizeProduct','$quantity')";
                            mysqli_query($conn, $sql_add_size);
                        }
                    } else { // Nếu chưa tồn tại sản phẩm, thực hiện thêm sản phẩm
                        $sql = "INSERT INTO `sanpham`(`TenSanPham`, `GiaSanPham`, `ThongTinSanPham`, `filePath`, `LoaiSanPham`) VALUES ('$nameProduct','$costProduct','$infoProduct','$targetFile', '$typeProduct')";
                        mysqli_query($conn, $sql);
                    
                        $sql_get_id = "SELECT MaSanPham FROM sanpham WHERE TenSanPham = '$nameProduct'";
                        $result_get_id = mysqli_query($conn, $sql_get_id);
                        $row_get_id = mysqli_fetch_assoc($result_get_id);
                        $idProduct = $row_get_id['MaSanPham'];
                    
                        $sql_2 = "INSERT INTO `chitietsanpham`(`MaSanPham`, `KichCo`, `SoLuongTonKho`) VALUES ('$idProduct','$sizeProduct','$quantity')";
                        mysqli_query($conn, $sql_2);
                    }
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