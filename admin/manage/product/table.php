<?php 
if (empty($_SESSION['level']))
{
  header('location:index.php?error');
  die();
} ?>
<table width="100%" align="center" border="2px">
  <tr>
    <th colspan="10">SẢN PHẨM</th>
  </tr>
  <tr>
    <th>Tên sản phẩm</th>
    <th>Mô tả</th>
    <th>Nội dung</th>
    <th>Ảnh</th>
    <th>Giá</th>
    <th>Đánh giá</th>
    <th>Sửa</th>
    <th>Xóa</th>
  </tr>
  <?php foreach ($resume as $each){ ?>
    <tr>
      <td style="text-align:center"><?php echo $each['name']; ?></td>
      <td style="text-align:center"><p><?php echo nl2br($each['description']); ?></p></td>
      <td style="text-align:center"><?php echo nl2br($each['detail']); ?></td>
      <td style="text-align:center">
        <img height="100px" src="../../../history_image/<?php echo $each['image'] ?>">
      </td>
      <td style="text-align:center"><?php echo $each['price']; ?></td>
      <td style="text-align:center"><?php echo $each['vote']; ?></td>
      <td style="text-align:center">
        <a href="form_update.php?id=<?php echo $each['id']; ?>" style="color: blue;">X</a>
      </td>
      <td style="text-align:center">
        <a href="delete.php?id=<?php echo $each['id']; ?>" style="color: red;">X</a>
      </td>
    </tr>
  <?php } ?>
</table>
<?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
  <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>" >
    <span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
  </a>
  <?php } ?>