<?php
    session_start();
    unset($_SESSION["username"]);
    session_destroy();
    header("Location: http://localhost/BaiTapLon/shopquanao.php?page_layout=trangchu");
?>