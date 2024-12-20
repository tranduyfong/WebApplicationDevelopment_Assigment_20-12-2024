<?php
    include("connect.php");
    $sql = "SELECT * FROM `sanpham` WHERE 1=1";
    
    if (!empty($_POST['loai_san_pham'])) {
        $loaiSanPham = $_POST['loai_san_pham'];
        $sql .= " AND MaSanPham LIKE '$loaiSanPham'";
    }
    
    if (!empty($_POST['gia_san_pham'])) {
        $giaSanPham = $_POST['gia_san_pham'];
        if ($giaSanPham == "<200") {
            $sql .= " AND GiaSanPham < 200000";
        } elseif ($giaSanPham == "200-500") {
            $sql .= " AND GiaSanPham BETWEEN 200000 AND 500000";
        } elseif ($giaSanPham == ">500") {
            $sql .= " AND GiaSanPham > 500000";
        }
    }
    
    if (!empty($_POST['sap_xep'])) {
        $sapXep = $_POST['sap_xep'];
        if ($sapXep == "tangdanten_AZ") {
            $sql .= " ORDER BY TenSanPham ASC";
        } elseif ($sapXep == "giamdanten_ZA") {
            $sql .= " ORDER BY TenSanPham DESC";
        } elseif ($sapXep == "tangdangia") {
            $sql .= " ORDER BY GiaSanPham ASC";
        } elseif ($sapXep == "giamdangia") {
            $sql .= " ORDER BY GiaSanPham DESC";
        }
    }

    $sql_products = mysqli_query($conn, $sql);
    while ($result = mysqli_fetch_assoc($sql_products)) {
        if (isset($result)) {
            echo 
                '<div>
                    <img src='. $result['filePath'] .' alt="">
                    <div class="name-product">
                        <a href="#">'. $result['TenSanPham'] . '</a>
                    </div>
                    <div class="cost-product">
                        <span> '. substr(substr(strval($result['GiaSanPham']), 0, 6), 0, 3).".". substr(substr(strval($result['GiaSanPham']), 0, 6), 3, 6)."₫". '</span>
                    </div>
                </div>';
        }
    }
?>