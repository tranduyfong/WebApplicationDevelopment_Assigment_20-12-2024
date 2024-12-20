<?php
    include("connect.php");
    if(empty($_POST['ten_nguoi_dung']) || empty($_POST['so_dien_thoai']) || empty($_POST['email']) || empty($_POST['ten_dang_nhap']) || empty($_POST['mat_khau']) || empty($_POST['xac_nhan_mat_khau'])) {
        echo '<script>
            alert("Vui lòng nhập đầy đủ thông tin !");
            window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=dangnhap&inner_layout=thaydoithongtin";
        </script>';
    } else {
        $fullName = $_POST['ten_nguoi_dung'];
        $numberPhone = $_POST['so_dien_thoai'];
        $email = $_POST['email'];
        $username = $_POST['ten_dang_nhap'];
        $password = $_POST['mat_khau'];
        $passwordSecondTime = $_POST['xac_nhan_mat_khau'];
        session_start();
        $currentUser = $_SESSION['username'];

        if($password == $passwordSecondTime) {
            $sql = "UPDATE `nguoidung` SET `TenNguoiDung`='$fullName',`TenDangNhap`='$username',`MatKhau`='$password',`SoDienThoai`='$numberPhone',`Email`='$email' WHERE `TenDangNhap` = '$currentUser'";
            $_SESSION['username'] = $username;
            mysqli_query($conn, $sql);
            echo '<script>
                alert("Thay đổi thông tin thành công !");
                window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-khachhang&inner_layout=thongtincanhan";
            </script>';
        } else {
            echo '<script>
                alert("Mật khẩu hoặc mật khẩu xác nhận chưa đúng !");
                window.location.href = "http://localhost/BaiTapLon/shopquanao.php?page_layout=taikhoan-khachhang&inner_layout=thaydoithongtin";
            </script>';
        }
    }
?>