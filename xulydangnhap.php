<?php   
    include("connect.php");
    session_start();
    if(isset($_SESSION['username'])) {
        if($_SESSION['username'] != 'admin') {
            header('Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-khachhang');
        } else {
            header('Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-admin');
        }
    } else {
        header('Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=dangnhap');
    }
?>