<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                    <div class="content">
                        <h1>Thêm sản phẩm</h1>
                    </div>
                    <div class="form-add-products">
                        <form action="xulythemsanpham.php" method="post" enctype="multipart/form-data">
                            <div class="single-info">
                                <span>Mã sản phẩm:</span>
                                <input type="text" name="ma_san_pham">
                            </div>
                            <div class="single-info">
                                <span>Tên sản phẩm:</span>
                                <input type="text" name="ten_san_pham">
                            </div>
                            <div class="single-info">
                                <span>Giá sản phẩm:</span>
                                <input type="text" name="gia_san_pham">
                            </div>
                            <div class="single-info" id="box">
                                <span>Thông tin sản phẩm:</span>
                                <textarea name="thong_tin_san_pham" id=""></textarea>
                            </div>
                            <div class="single-info">
                                <span>Số lượng tồn kho:</span>
                                <input type="text" name="so_luong_ton_kho">
                            </div>
                            <div class="single-info">
                                <span>File ảnh sản phẩm:</span>
                                <input type="file" name="productFile" required id="file-products">
                            </div>
                            <div class="single-info">
                                <div>
                                    <button>Thêm sản phẩm</button>
                                </div>
                            </div>
                        </form>
                    </div>
</body>
</html>