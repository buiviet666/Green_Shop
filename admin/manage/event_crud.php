<link rel="stylesheet" type="text/css" href="../event.css">
<?php 
if (isset($_GET['empty_insert'])) {
  ?>
  <span class="empty_crud"><?php echo 'PHẢI ĐIỀN ĐẤY ĐỦ THÔNG TIN'; ?></span>
  <?php  
}
?>

<?php 
if (isset($_GET['empty_update'])) {
  ?>
  <span class="empty_crud"><?php echo 'CẦN CHỌN ĐỐI TƯỢNG ĐỂ SỬA'; ?></span>
  <?php  
}
?>

<?php 
if (isset($_GET['empty_delete'])) {
  ?>
  <span class="empty_crud"><?php echo 'CẦN CHỌN ĐỐI TƯỢNG ĐỂ XÓA'; ?></span>
  <?php  
}
?>

<?php 
if (isset($_GET['insert'])) {
  ?>
  <span class="success_crud"><?php echo 'THÊM THÀNH CÔNG'; ?></span>
  <?php  
}
?>

<?php 
if (isset($_GET['update'])) {
  ?>
  <span class="success_crud"><?php echo 'SỬA THÀNH CÔNG'; ?></span>
  <?php  
}
?>

<?php 
if (isset($_GET['delete'])) {
  ?>
  <span class="success_crud"><?php echo 'XÓA THÀNH CÔNG'; ?></span>
  <?php  
}
?>

<?php 
if (isset($_GET['error_delete'])) {
  ?>
  <span class="error_crud"><?php echo 'KHÔNG XÓA ĐƯỢC'; ?></span>
  <?php  
}
?>
