<?php
    include("connect.php");
    $delete = $_GET['id'];

    $sql = "DELETE FROM `dathang` WHERE `MaDatHang` = '$delete'";
    mysqli_query($conn, $sql);
    header("Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-khachhang&inner_layout=thongtindonhang");
?>