<?php

    session_start();
    $id = $_GET['id'];

    // xóa đi sản phẩm giỏ hàng bằng cách xóa id của nó
    unset($_SESSION['cart'][$id]);

    // quay lại giỏ hàng 
    header('location: cart.php');