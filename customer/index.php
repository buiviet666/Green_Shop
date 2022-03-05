<?php 
session_start();
    // kiểm tra xem đã đăng nhập chưa, hiện tại là kiểm tra id
    // die($_SESSION['user_name']);
if(empty($_SESSION['id'])) {
        // nếu mà chưa đăng nhập sẽ bị đẩy về phần trang chủ
    header('location: ../index.php');
} else {
    echo '<script type="text/javascript">

        window.onload = function () { alert("Chào mừng bạn đã quay trở lại!"); }

    </script>';
}
if (isset($_GET['success_order'])) {
    echo '<script type="text/javascript">

            window.onload = function () { alert("Đặt hàng thành công"); }

        </script>';
    }
    if (isset($_GET['empty_cart'])) {
        echo '<script type="text/javascript">

            window.onload = function () { alert("Chưa có sản phẩm nào trong giỏ hàng"); }

        </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Green Shop</title>
    <link rel="shortcut icon" href="data:image/png;base64,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" type="image/x-icon">
</head>
<body>

    <div id="main">

        <!--navbar-->
        <?php require 'component_navbar_ontop.php' ?>
        <?php require 'component_navbar_shortcut.php' ?>

        <!--body-->
        <?php require 'component_index_body.php' ?>

        <!-- footer -->
        <?php require 'component_footer.php' ?>

    </div>

    <script src="../assets/js/index.js"></script>
</body>
</html>