<?php
    include("connect.php");
    $deleted_id = $_GET['id'];
    $sql = "DELETE FROM `giohang` WHERE `MaGioHang` = '$deleted_id'";
    mysqli_query($conn, $sql);
    header("Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=giohang");
?>