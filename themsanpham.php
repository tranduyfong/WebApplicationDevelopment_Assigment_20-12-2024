<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #inner-select-size {
            width: 100px;
            margin-left: 80px;
        }
        #inner-select-size label {
            width: 40px;
            padding: 7px;
            margin-right: 20px;
            border: 1px solid #333;
            border-radius: 5px;
            font-size: 70%;
            background-color: white;
            color: black;
            transition: 0.2s all ease-in-out;
        }
    </style>
</head>
<body>
                    <div class="content">
                        <h1>Thêm sản phẩm</h1>
                    </div>
                    <div class="form-add-products">
                        <form action="xulythemsanpham.php" method="post" enctype="multipart/form-data">
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
                            <div class="single-info" id="select-size">
                                <span>Lựa chọn size: </span>
                                <div id="inner-select-size">
                                    <input type="radio" id="size_M" name="size" value="M" hidden>
                                    <label for="size_M" id="sizeM">M</label>
                                    <input type="radio" id="size_L" name="size" value="L" hidden>
                                    <label for="size_L" id="sizeL">L</label>
                                    <input type="radio" id="size_XL" name="size" value="XL" hidden>
                                    <label for="size_XL" id="sizeXL">XL</label>
                                </div>
                            </div>
                            <div class="single-info" id="select-size">
                                <span>Lựa chọn loại: </span>
                                <div id="inner-select-size" style="margin-left: 140px;">
                                    <input type="radio" id="ao" name="loai" value="ao" hidden>
                                    <label for="ao" id="ao-label">Áo</label>
                                    <input type="radio" id="quan" name="loai" value="quan" hidden>
                                    <label for="quan" id="quan-label">Quần</label>
                                    <input type="radio" id="giaydep" name="loai" value="giaydep" hidden>
                                    <label for="giaydep" id="giaydep-label">Giày, dép</label>
                                    <input type="radio" id="lego" name="loai" value="lego" hidden>
                                    <label for="lego" id="lego-label">Lego</label>
                                </div>
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
        <script>
            const sizeM = document.getElementById('sizeM');
            const sizeL = document.getElementById('sizeL');
            const sizeXL = document.getElementById('sizeXL');

            const ao = document.getElementById('ao-label');
            const quan = document.getElementById('quan-label');
            const giaydep = document.getElementById('giaydep-label');
            const lego = document.getElementById('lego-label');

            sizeM.addEventListener('click', ()=> {
                sizeM.style.backgroundColor = 'black';
                sizeM.style.color = 'white';
                sizeL.style.backgroundColor = 'white';
                sizeL.style.color = '#333';
                sizeXL.style.backgroundColor = 'white';
                sizeXL.style.color = '#333';
            });
            sizeL.addEventListener('click', ()=> {
                sizeL.style.backgroundColor = 'black';
                sizeL.style.color = 'white';
                sizeM.style.backgroundColor = 'white';
                sizeM.style.color = '#333';
                sizeXL.style.backgroundColor = 'white';
                sizeXL.style.color = '#333';
            }); 
            sizeXL.addEventListener('click', ()=> {
                sizeXL.style.backgroundColor = 'black';
                sizeXL.style.color = 'white';
                sizeL.style.backgroundColor = 'white';
                sizeL.style.color = '#333';
                sizeM.style.backgroundColor = 'white';
                sizeM.style.color = '#333';
            });

            ao.addEventListener('click', ()=> {
                ao.style.backgroundColor = 'black';
                ao.style.color = 'white';
                quan.style.backgroundColor = 'white';
                quan.style.color = '#333';
                giaydep.style.backgroundColor = 'white';
                giaydep.style.color = '#333';
                lego.style.backgroundColor = 'white';
                lego.style.color = '#333';
            });

            quan.addEventListener('click', ()=> {
                ao.style.backgroundColor = 'white';
                ao.style.color = '#333';
                quan.style.backgroundColor = 'black';
                quan.style.color = 'white';
                giaydep.style.backgroundColor = 'white';
                giaydep.style.color = '#333';
                lego.style.backgroundColor = 'white';
                lego.style.color = '#333';
            });

            giaydep.addEventListener('click', ()=> {
                ao.style.backgroundColor = 'white';
                ao.style.color = '#333';
                quan.style.backgroundColor = 'white';
                quan.style.color = '#333';
                giaydep.style.backgroundColor = 'black';
                giaydep.style.color = 'white';
                lego.style.backgroundColor = 'white';
                lego.style.color = '#333';
            });

            lego.addEventListener('click', ()=> {
                ao.style.backgroundColor = 'white';
                ao.style.color = '#333';
                quan.style.backgroundColor = 'white';
                quan.style.color = '#333';
                giaydep.style.backgroundColor = 'white';
                giaydep.style.color = '#333';
                lego.style.backgroundColor = 'black';
                lego.style.color = 'white';
            });
        </script>
</body>
</html>