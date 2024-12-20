<?php
    include("connect.php");
    if(empty($_POST["ho-dem"]) || empty($_POST["ten"]) || empty($_POST["so-dien-thoai"]) || empty($_POST["email"]) || empty($_POST["ten-dang-nhap"]) || empty($_POST["mat-khau"])){
        echo '<script>
            alert("Vui lòng nhập đủ thông tin !");
            window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=dangky";
        </script>';
    } else {
        $fullName = $_POST['ho-dem']. ' ' . $_POST["ten"];
        $numberPhone = $_POST['so-dien-thoai'];
        $email = $_POST['email'];
        $username = $_POST['ten-dang-nhap'];
        $password = $_POST['mat-khau'];

        $sql = "INSERT INTO `nguoidung`(`TenNguoiDung`, `TenDangNhap`, `MatKhau`, `SoDienThoai`, `Email`) VALUES ('$fullName','$username','$password','$numberPhone','$email')";
        mysqli_query($conn, $sql);
        
        echo '<script>
                    alert("Tạo tài khoản thành công");
                    window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=dangnhap";
                </script>';
    }
    
?>