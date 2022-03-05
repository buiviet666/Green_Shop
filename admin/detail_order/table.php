 <?php 
$each = mysqli_fetch_array($resume);
$sum_price = 0;
?>
<table width="100%" align="center" border="2px">
	<tr>
		<th colspan="4">CHI TIẾT ĐƠN HÀNG</th>
	</tr>
	<tr>
		<th colspan="2">Tên khách hàng</th>
		<th colspan="2">Tên người nhận hàng</th>
	</tr>
	<tr>
		<th colspan="1" style="text-align:center">
			<?php echo $each['first_name']; ?>
		</th>
		<th colspan="1" style="text-align:center">
			<?php echo $each['last_name']; ?>
		</th>
		<th colspan="2" style="text-align:center">
			<?php echo $each['name_receiver']; ?>
		</th>
	</tr>
	<tr>
		<th>Tên sản phẩm</th>
		<th>Ảnh sản phẩm</th>
		<th>Số lượng</th>
		<th>Tổng tiền</th>
	</tr>
	<?php foreach ($resume as $get_detail_order){ ?>
		<tr>
			<td style="text-align:center"><?php echo $get_detail_order['name']; ?></td>
			<td style="text-align:center">
				<img height="100px" src="../../history_image/<?php echo $get_detail_order['image'] ?>">
			</td>
			<td style="text-align:center">
				<?php echo $get_detail_order['quantity']; ?>
			</td>
			<td style="text-align:center">
				<?php
				$price=$get_detail_order['quantity']*$get_detail_order['price'];
				echo $price; 
				$sum_price = $sum_price + $price;
			?> VND
		</td>
	</tr>
<?php } ?>
<tr>
	<td colspan="2"></td>
	<th>Tổng tiền hóa đơn</th>
	<td>
		<b>
			<?php 
			echo $sum_price;
		?> VND
	</b>
</td>
</tr>
</table>
<?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
	<a  href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
		<span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
	</a>
<?php } ?>
