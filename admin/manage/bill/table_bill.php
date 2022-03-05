<table width="100%" align="center" border="2px">
  <tr>
    <th colspan="11">HÓA ĐƠN ĐÃ DUYỆT</th>
  </tr>
  <tr>
    <th>Người duyệt</th>
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
  <?php foreach ($resume as $get_bill){ ?>
    <tr>
      <td style="text-align:center"><?php echo $get_bill['name']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['last_name']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['first_name']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['name_receiver']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['phone_receiver']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['address_receiver']; ?></td>
      <td style="text-align:center">
        <?php 
        $status = $get_bill['status'];
        if ($status == 1) {
          echo 'Đã duyệt';
        }
        ?>
      </td>
      <td style="text-align:center"><?php echo $get_bill['date_order']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['total_price']; ?></td>
      <td style="text-align:center">
        <a href="../detail_order?id=<?php echo $get_bill['id']; ?>&type=bill" style="color: red; text-decoration: none;">=></a>
      </td>
      <td style="text-align:center">
        <a href="delete_bill.php?id=<?php echo $get_bill['id']; ?>&type=bill" style="color: red; text-decoration: none;">X</a>
      </td>
    </tr>
  <?php } ?>
</table>
<?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
  <a  href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
    <span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
  </a>
  <?php } ?>