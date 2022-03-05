<?php 
  session_start();  
  if (empty($_SESSION['level']))
  {
    header('location:../index.php?error');
    die();
  }else{
    $level = $_SESSION['level'];
    if($level != 2){
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
  <title>ADMIN</title> 
</head>
<body>
  <div id="div-all">
    <?php 
    require_once 'menu.php'
    ?>
  </div>
</div>
</body>
</html>