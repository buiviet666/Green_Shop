<?php 
session_start();
if (empty($_SESSION['level']))
{
  header('location:../index.php?error');
  die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/media.css">
  <title>Nhà sản xuất</title> 
</head>
<body>
  <?php  
  require '../connect.php';

  require 'page_and_search.php';
  ?>

  <div id="div-all">
    <?php 
    require_once 'menu.php'
    ?>
  </div>
</body>
</html>