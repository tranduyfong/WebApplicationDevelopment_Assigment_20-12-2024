<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .single-order {
            width: 90%;
            height: max-content;
            margin-left: 10%;
            margin-bottom: 30px;
            display: flex;
            padding-bottom: 10px;
            border-bottom: 1px solid #333;
        }
        .single-order .img {
            width: 14%;
            margin-right: 40px;
        }
        .single-order .img img {
            width: 100%;
            height: 100%;
        }
        .single-order .title {
            width: 80%;
            display: flex;
            justify-content: space-between;
        }
        .single-order .title .right {
            margin-top: 40px;
            
        }
        .single-order .title .right div {
            margin-bottom: 20px;
        }
        .single-order .title .right a {
            padding: 5px;
            background-color: aliceblue;
            text-decoration: none;
            border-radius: 10px;
        }
        #see-product {
            color:rgba(0, 0, 0, 0.55);
            transition: 0.2s all ease-in-out;
        }
        #see-product:hover {
            background-color: rgb(200, 183, 56);
            color: aliceblue;
        }
        #cancel {
            color:rgba(0, 0, 0, 0.55);
            transition: 0.2s all ease-in-out;
        }
        #cancel:hover {
            background-color: rgb(242, 58, 58);
            color: aliceblue;
        }
    </style>
</head>
<body>
                    <div class="content">
                        <h1>Xóa sản phẩm</h1>
                    </div>
                    <?php
                        include("connect.php");
                                    
                        // $getUsername = $_SESSION['username'];
                        // $sql_get_userId = "SELECT * FROM nguoidung WHERE `TenDangNhap` = '$getUsername'";
                        // $result_get_userId = mysqli_query($conn, $sql_get_userId);
                        // $row_get_userId = mysqli_fetch_assoc($result_get_userId);
                        // $userId = $row_get_userId['MaNguoiDung'];

                        $sql = "SELECT * FROM `sanpham`";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '
                                <div class="single-order">
                                    <div class="img">
                                        <img src="'.$row['filePath'].'" alt="">
                                    </div>
                                    <div class="title">
                                        <div class="left">
                                            <h3>'.$row['TenSanPham'].'</h3>
                                            <div>Giá: '.number_format($row['GiaSanPham'], 0, ',', '.').'đ'.'</div>
                                        </div>
                                        <div class="right">
                                            <div><a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=chitiet-sanpham&id='.$row['MaSanPham'].'" id="see-product">Xem thông tin sản phẩm</a></div>
                                            <div><a href="http://localhost/BaiTapLon/shopquanao.php?page_layout=xulyxoasanpham&id='.$row['MaSanPham'].'" id="cancel">Xóa sản phẩm</a></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            ';
                    ?>
                    <?php } ?>

                    <script>
                        // Đảm bảo chạy khi mà đoạn mã đã được load hết
                        document.addEventListener('DOMContentLoaded', () => {
                            // Lấy các phần tử có id là cancel
                            document.querySelectorAll('#cancel').forEach(button => {
                                // Gán sự kiện onclcick cho từng dòng sản phẩm
                                button.addEventListener('click', (e) => {
                                    if (!confirm('Bạn có chắc chắn muốn xóa không?')) {
                                        // Chặn xóa khi người dùng nhấn hủy bỏ
                                        e.preventDefault();
                                    }
                                });
                            });
                        });
                    </script>
</body>
</html>