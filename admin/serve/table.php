<?php 
if (empty($_SESSION['id'])){
  header('location:../index.php?error');
  exit;
}
?>
<table width="100%" align="center" border="2px">
  <tr>
    <th colspan="11">NHÂN VIÊN</th>
  </tr>
  <tr>
    <th>Họ và tên</th>
    <th>Giới tính</th>
    <th>Số điện thoại</th>
    <th>CCCD</th>
    <th>Địa chỉ</th>
    <th>Cấp bậc</th>
    <th>Lương</th>
    <th>Tài khoản</th>
    <th>Mật khẩu</th>
    <th>Sửa</th>
    <th>Xóa</th>
  </tr>
  <?php foreach ($resume as $get_serve){ ?>
    <tr>
      <td style="text-align:center"><?php echo $get_serve['name']; ?></td>
      <td style="text-align:center"><?php echo $get_serve['gender']; ?></td>
      <td style="text-align:center"><?php echo $get_serve['phone']; ?></td>
      <td style="text-align:center"><?php echo $get_serve['identity']; ?></td>
      <td style="text-align:center"><?php echo $get_serve['address']; ?></td>
      <td style="text-align:center">    
        <?php 
        if ($get_serve['level'] == 1) {
          echo 'Nhân viên';
        }else{
          echo 'Quản lý';
        }
        ?>
      </td>
      <td style="text-align:center"><?php echo $get_serve['wage']; ?></td>
      <td style="text-align:center"><?php echo $get_serve['account']; ?></td>
      <td style="text-align:center"><?php echo $get_serve['password']; ?></td>
      <td style="text-align:center">
        <a href="form_update.php?id=<?php echo $get_serve['id']; ?>" style="color: blue;">X</a>
      </td>
      <td style="text-align:center">
        <a href="delete.php?id=<?php echo $get_serve['id']; ?>" style="color: red;">X</a>
      </td>
    </tr>
  <?php } ?>
</table>
<?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
  <a  href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
    <span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
  </a>
  <?php } ?>