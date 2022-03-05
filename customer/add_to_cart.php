<?php
if(empty($_SESSION['id'])) {
        // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
    header('location: ../login_register.php?not_exists_signin');
}
session_start();

    // xóa giỏ hàng
    // unset($_SESSION['cart']);
    // lấy id để phân biệt sản phẩm 
$id = $_GET['id'];
$type = $_GET['type'];

    // kiểm tra giỏ hàng đã có gì chưa
if ($type === 'add') {
    if(empty($_SESSION['cart'][$id])) {
        // kết nối db để lấy thông tin sản phẩm đó về
        require '../admin/connect.php';
        $sql = "select * from product
        where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        $_SESSION['cart'][$id]['name'] = $each['name'];
        $_SESSION['cart'][$id]['image'] = $each['image'];
        $_SESSION['cart'][$id]['price'] = $each['price'];
        $_SESSION['cart'][$id]['quantity'] = 1;
    } else {
        // nếu có rồi thì tăng 1 số lượng
        $_SESSION['cart'][$id]['quantity']++;
    }
    header("location: each_product.php?id=$id");
}else if ($type === 'buy') {
    if(empty($_SESSION['cart'][$id])) {
        // kết nối db để lấy thông tin sản phẩm đó về
        require '../admin/connect.php';
        $sql = "select * from product
        where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        $_SESSION['cart'][$id]['name'] = $each['name'];
        $_SESSION['cart'][$id]['image'] = $each['image'];
        $_SESSION['cart'][$id]['price'] = $each['price'];
        $_SESSION['cart'][$id]['quantity'] = 1;
    } else {
        // nếu có rồi thì tăng 1 số lượng
        $_SESSION['cart'][$id]['quantity']++;
    }
    header('location: cart.php');
}

// print_r($_SESSION['cart']);

