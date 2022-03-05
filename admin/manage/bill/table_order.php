<table width="100%" align="center" border="2px">
  <tr>
    <th colspan="10">ĐƠN ĐẶT HÀNG</th>
  </tr>
  <tr>
    <th colspan="2">Họ và tên khách hàng</th>
    <th>Người nhận hàng</th>
    <th>Số điện thoại</th>
    <th>Địa chỉ</th>
    <th>Tình trạng</th>
    <th>Ngày đặt hàng</th>
    <th>Tổng tiền</th>
    <th>Chi tiết</th>
    <th>Xóa</th>
  </tr>
  <?php foreach ($resume as $get_order){ ?>
    <tr>
      <td style="text-align:center"><?php echo $get_order['last_name']; ?></td>
      <td style="text-align:center"><?php echo $get_order['first_name']; ?></td>
      <td style="text-align:center"><?php echo $get_order['name_receiver']; ?></td>
      <td style="text-align:center"><?php echo $get_order['phone_receiver']; ?></td>
      <td style="text-align:center"><?php echo $get_order['address_receiver']; ?></td>
      <td style="text-align:center">
        <?php 
        $status = $get_order['status'];
        if ($status == 0) {
          echo 'Chưa duyệt';
        }elseif ($status == 1) {
          echo 'Đã duyệt';
        }
        ?>
      </td>
      <td style="text-align:center"><?php echo $get_order['date_order']; ?></td>
      <td style="text-align:center"><?php echo $get_order['total_price']; ?> VND</td>
      <td style="text-align:center">
        <a href="../detail_order?id=<?php echo $get_order['id']; ?>&type=order" style="color: red; text-decoration: none;">=></a>
      </td>
      <td style="text-align:center">
        <a href="delete_bill.php?id=<?php echo $get_order['id']; ?>&type=order" style="color: red; text-decoration: none;">X</a>
      </td>
    </tr>
  <?php } ?>
</table>
<?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
  <a  href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
    <span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
  </a>
  <?php } ?>