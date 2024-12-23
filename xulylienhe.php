<?php
    include("connect.php");
    
    session_start();
    if(empty($_SESSION['username'])) {
        echo '<script>
                    alert("Vui lòng đăng nhập tài khoản !");
                    window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=dangnhap";
                </script>';
    }
        
    if(empty($_POST['ho_ten']) || empty($_POST['email']) || empty($_POST['so_dien_thoai']) || empty($_POST['them_thong_tin'])) {
        echo        '<script>
                            alert("Vui lòng nhập đủ thông tin !");
                            window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=lienhe";
                        </script>';
    } else {
        $fullname = $_POST['ho_ten'];
        $email = $_POST['email'];
        $numberPhone = $_POST['so_dien_thoai'];
        $more_information = $_POST['them_thong_tin'];

        $sql = "INSERT INTO `lienhe`(`Email`, `TenLienHe`, `SoDienThoai`, `NoiDung`) VALUES ('$email','$fullname','$numberPhone','$more_information')";
        mysqli_query($conn, $sql);
        echo        
                    '<script>
                            alert("Cảm ơn bạn đã đóng góp thông tin !");
                            window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=lienhe";
                        </script>';
    }
?>