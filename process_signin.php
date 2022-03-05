<?php
if (empty($_POST['user_name']
    || $_POST['password'])) 
{
    header('location:login_register.php?empty_signin');
    die();
}

// lấy dữ liệu từ form 
$user_name = addslashes($_POST['user_name']);
$password = addslashes($_POST['password']);


    // kiểm tra xem có tích vào remember không
    if (isset($_POST['remember'])) {
        $remember = true;
    }else{
        $remember = false;
    }


    // liên kết file đến database
    require './admin/connect.php';


    // đếm xem đã xuất hiện user_name trong database hay chưa
    $sql = "select * from customer
    where user_name = '$user_name' and password='$password'";
    $result = mysqli_query($connect, $sql);
            
    
    // đếm xem có bao nhiêu bản ghi
    $number_rows = mysqli_num_rows($result);


    // nếu có = 1 như dưới, tức có bản ghi rồi thì chạy điều kiện
    if ($number_rows == 1) {
        session_start();
        $each = mysqli_fetch_array($result);
        $id =$each['id'];
        $_SESSION['id'] = $each['id'];
        $_SESSION['user_name'] = $each['user_name'];
        if($remember) {
            $token = uniqid('user_', true);
            $sql = "update customer
            set
            token = '$token'
            where
            id = '$id'
            ";      
            mysqli_query($connect,$sql);
            setcookie('remember', $token, time() + 60*60*24*30);
            header('location:customer/index.php');
            mysqli_close($connect);
        }
        echo '<script type="text/javascript">
            alert("Đăng nhập thành công!");
            location="customer/index.php";
        </script>';
    } else {

        echo '<script type="text/javascript">
            alert("Tên tài khoản hoặc mật khẩu của bạn không đúng!");
            location="login_register.php";
        </script>';
        exit;
    }


