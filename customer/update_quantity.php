<?php
if(empty($_SESSION['id'])) {
        // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
    header('location: ../login_register.php?not_exists_signin');
}
if(empty($_GET['id'])) {
        // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
    header('location:cart.php?error_update_quantity');
}
$id = $_GET['id'];
    // lấy type về để kiểm tra
$type = $_GET['type'];

session_start();
require '../admin/connect.php';
$sql = "select * from product
where id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
if (empty($each['id'])) {
    header('location:cart.php?error_update_quantity');
}

    // nếu type = decre tức trừ thì:
if($type === 'decre') {
    if($_SESSION['cart'][$id]['quantity'] > 1) {
        $_SESSION['cart'][$id]['quantity']--;
    } else {
            // nếu hết sản phẩm để trừ thì biến mất luôn khỏi giỏ hàng
        unset($_SESSION['cart'][$id]);
    }
} else {
        // còn ngược lại là cộng
    $_SESSION['cart'][$id]['quantity']++;
}

    // sau khi ấn trừ sản phẩm quay lại trang giỏ hàng
header('location: cart.php');