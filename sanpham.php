<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .left {
            position: sticky;
            top: 10%;
            display: flex;
        }
        .fill-button {
            text-align: center;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .fill-button button {
            height: 100%;
            width: 15%;
            border: none;
            border-radius: 10px;
            background-color: #14b8b9;
            color: white;
            font-size: 100%;
            transition: 0.3s all ease-in-out;
        }
        .fill-button button:hover {
            background-color: white;
            border: 1px solid #333;
            color: #14b8b9;
        }
    </style>
</head>
<body>
<div class="show-position">
            <span>Sản phẩm</span>
        </div>
        <div class="products-main">
            <div class="inner-products-main">
                <div class="banner">
                    <img src="/BaiTapLon/image/collection_main_banner.webp" alt="">
                </div>
                <div class="shopping">
                    <div class="left">
                        <form action="" method="post">
                            <div class="fill-products">
                                <span>Lọc theo sản phẩm</span>
                            </div>
                            <div class="fill-type">
                                <div class="inner-fill">
                                    <p>Loại: </p>
                                    <div>
                                        <input type="radio" name="loai_san_pham" value="ao" id="type1">
                                        <label for="type1">Áo</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="loai_san_pham" value="quan" id="type2">
                                        <label for="type2">Quần</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="loai_san_pham" value="giaydep" id="type3">
                                        <label for="type3">Giày, Dép</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="loai_san_pham" value="lego" id="type4">
                                        <label for="type4">Lego</label>
                                    </div>
                                </div>
                            </div>
                            <div class="fill-cost">
                                <div class="inner-fill">
                                    <p>Giá: </p>
                                    <div>
                                        <input type="radio" name="gia_san_pham" value="<200" id="type5">
                                        <label for="type5">< 200.000đ</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="gia_san_pham" value="200-500" id="type7">
                                        <label for="type7"> > 200.000đ - 500.000đ</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="gia_san_pham" value=">500" id="type8">
                                        <label for="type8">> 500.000đ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sort">
                                <div class="inner-fill">
                                    <p>Sắp xếp: </p>
                                    <div>
                                        <input type="radio" name="sap_xep" value="tangdanten_AZ" id="type9">
                                        <label for="type9">Tăng dần theo tên A-Z</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="sap_xep" value="giamdanten_ZA" id="type10">
                                        <label for="type10">Giảm dần theo tên Z-A</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="sap_xep" value="tangdangia" id="type11">
                                        <label for="type11">Tăng dần theo giá</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="sap_xep" value="giamdangia" id="type12">
                                        <label for="type12">Giảm dần theo giá</label>
                                    </div>
                                </div>
                            </div>
                            <div class="fill-button">
                                <button>Lọc</button>
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <?php
                            if(empty($_POST['loai_san_pham']) && empty($_POST['gia_san_pham']) && empty($_POST['sap_xep'])) {
                                include("connect.php");
                                $sql = "SELECT * FROM `sanpham`";
                                $sql_products = mysqli_query($conn, $sql);
                                while ($result = mysqli_fetch_assoc($sql_products)) {
                                    if(isset($result)) {
                                        echo 
                                            '<div>
                                                <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='. $result['MaSanPham'] .'"><img src='. $result['filePath'] .' alt=""></a>
                                                <div class="name-product">
                                                    <a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='. $result['MaSanPham'] .'">'. $result['TenSanPham'] . '</a>
                                                </div>
                                                <div class="cost-product">
                                                    <span> '. substr(substr(strval($result['GiaSanPham']), 0, 6), 0, 3).".". substr(substr(strval($result['GiaSanPham']), 0, 6), 3, 6)."₫". '</span>
                                                </div>
                                            </div>';
                                    }
                                }
                            } else {
                                include('xulyloc.php');
                            }
                        ?>
                    </div>
                </div>
                <div class="products-seen"></div>
            </div>
        </div>
</body>
</html>