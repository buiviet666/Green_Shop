<div style="width:100%; height: 50%;">
  <div class="top" style="width: 100%; height: 11%;">
    <div style="width: 50%; height: 100%; float: left; ">
      <?php 
      require '../event_crud.php';
      require 'page_and_search_bill.php';
      ?>
    </div>
    <div style="width: 50%; height: 100%; float: left;">
      <form style="float: right;">
        Tìm kiếm tên khách hàng<br>
        <input type="search" name="search" value="<?php echo $search ?>">
      </form>
    </div>
  </div>
  <div class="bot" style="width: 100%; height: 89%;">
    <div>
      <?php 
      require 'table_bill.php';
      ?>
    </div>
  </div>
</div>
<div style="width:100%; height: 50%;">
  <?php 
  require 'page_and_search_order.php';
  require 'table_order.php';
  ?>
</div>