<?php
    include("connect.php");
    $username = $_POST['tai-khoan'];
    $password = $_POST['mat-khau'];

    $sql_account = "SELECT * FROM `nguoidung` WHERE `TenDangNhap` = '$username'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql_account));
    if(isset($result['TenDangNhap']) && $password == $result['MatKhau']) {
        if($result['TenDangNhap'] != 'admin') {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-khachhang');
        } else {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-admin');
        }
    } else {
        echo '<script>
                    alert("Sai tài khoản hoặc mật khẩu");
                    window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=dangnhap";
                </script>';
    }
?>