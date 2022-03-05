<?php 
session_start();
if (!isset($_SESSION['id'])){
  header('location:../index.php?error');
  exit;
}else{
  $level = $_SESSION['level'];
  if($level != 1){
    header('location:../index.php?error');
    exit;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/media.css">
  <title>QUẢN LÝ</title> 
</head>
<body>
  <div id="div-all">
    <?php 
    require_once 'menu.php';
    ?>
  </div>
</div>
</body>
</html>