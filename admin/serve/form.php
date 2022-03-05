<div class="top" style="width: 100%; height: 50%;">  
  <?php 
  require 'form_insert.php';
  ?>
</div>
<div class="bot" style="width: 100%; height: 50%;">
  <div style="width: 50%; height: 12%; float: left;">
    <?php 
      require '../event_crud.php';
    ?>
  </div>
  <div style="width: 50%; height: 12%; float: left;">
    <form style="float: right;">
      Tìm kiếm tên nhân viên<br>
      <input type="search" name="search" value="<?php echo $search ?>">
    </form>
  </div>
  <?php 
  require 'table.php';
  ?>
</div>