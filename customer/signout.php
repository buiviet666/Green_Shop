<?php

// phải bắt buộc có
session_start();

$id = $_SESSION['id'];
require '../admin/connect.php';
$query="UPDATE `customer`
SET
`token` = NULL
WHERE `id` = '$id'";
mysqli_query($connect,$query);
mysqli_close($connect);
// đăng xuất, xóa đi id và tên sau
// print_r($_SESSION['id']);
// die($_SESSION['user_name']);
unset($_SESSION['id']);
unset($_SESSION['user_name']);
// print_r($_SESSION['id']);
// die($_SESSION['user_name']);
setcookie('remember',null,-1);
// die($_COOKIE['id']);
header('location:../index.php');