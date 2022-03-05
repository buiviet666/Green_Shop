<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CHI TIẾT HÓA ĐƠN</title> 
</head>
<body>
  <?php  
  require '../../admin/connect.php';
  require 'page_and_search.php';
  ?>
  <div style="width: 100%; height: 100%;">
    <div style="width: 50%; height: 12%; float: left;">
      <!-- <form>
        Tìm kiếm tên sản phẩm<br>
        <input type="search" name="search" value="<?php echo $search ?>">
      </form> -->
    </div>
    <div style="width: 50%; height: 12%; float: left;">
    </div>
    <?php 
    require 'table.php'
    ?>
    <br>
    <br>
    <div style="float: right;">
      <?php if ($_GET['type'] === 'order'){ ?>
        <button style="background-color:blue;">
          <a href="../bill/index.php" style="text-decoration: none; color: white;">Quay lại</a>
        </button>

        <button style="background-color:red;">
          <a href="../bill/delete_bill.php?id=<?php echo $_GET['id']; ?>" style="text-decoration: none; color: white;">Hủy đơn</a>
        </button>
        <button style="background-color:green;">
          <a href="accept_order.php?id=<?php echo $_GET['id']; ?> " style="text-decoration: none; color: white;">Duyệt đơn</a>
        </button>
      <?php }else if ($_GET['type'] === 'bill'){?>
        <button style="background-color:blue;">
          <a href="../user.php" style="text-decoration: none; color: white;">Quay lại</a>
        </button>
        <button style="background-color:red;">
          <a href="../delete_bill.php?id=<?php echo $_GET['id']; ?>" style="text-decoration: none; color: white;">Hủy đơn</a>
        </button>
      <?php } ?>
    </div>
  </div>
</body>
</html>
