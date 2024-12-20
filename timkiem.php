<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="show-position">
        <span>Tìm kiếm sản phẩm</span>
    </div>
    <?php
        include("connect.php");
        $result = $_POST['tim_kiem'];
        $sql_dem = "SELECT COUNT(*) AS Dem FROM `sanpham` WHERE `TenSanPham` LIKE '%$result%'";
        $sql = "SELECT * FROM `sanpham` WHERE `TenSanPham` LIKE '%$result%'";

        $result_items = mysqli_query($conn, $sql);
        $count = mysqli_fetch_assoc(mysqli_query($conn, $sql_dem));
    ?>
    <div class="all-item">
        <div class="header-title">
            <h1>có <?php echo $count['Dem']; ?> kết quả phù hợp tìm kiếm</h1>
        </div>
        <div class="inner-all-item">
            <?php
                while ($row = mysqli_fetch_assoc($result_items)) {
                    if(isset($row)) {
                        echo 
                            '<div>
                                    <img src='. $row['filePath'] .' alt="">
                                    <div class="name-product">
                                        <a href="#">'. $row['TenSanPham'] . '</a>
                                    </div>
                                    <div class="cost-product">
                                        <span> '. substr(substr(strval($row['GiaSanPham']), 0, 6), 0, 3).".". substr(substr(strval($row['GiaSanPham']), 0, 6), 3, 6)."₫". '</span>
                                    </div>
                                </div>';
                    }
                }
            ?>
        </div>
</body>
</html>