<link rel="stylesheet" href="../event.css">
<?php 	
if (empty($_SESSION['level']))
{
	header('location:index.php?error');
	die();
}
require '../connect.php';
$query_producer = "select * from producer ";
$resume_producer=mysqli_query($connect,$query_producer);
mysqli_close($connect);	
?>
<form method="post" action="process_insert.php" enctype="multipart/form-data">
	<table width="50%" align="center" border="2px">
		<tr>
			<th colspan="2">THÊM SẢN PHẨM</th>
		</tr>
		<tr>
			<th>Tên sản phẩm</th>
			<td>
				<input id="name" type="text" name="name">
				<span id="error_name" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Mô tả</th>
			<td>
				<textarea id="description" name="description"></textarea>
				<span id="error_description" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Nội dung</th>
			<td>
				<textarea id="detail" name="detail"></textarea>
				<span id="error_detail" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Ảnh</th>
			<td>
				<input id="image" type="file" name="image">
				<span id="error_image" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Giá</th>
			<td>
				<input id="price" type="text" name="price">
				<span id="error_price" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Đánh giá</th>
			<td>
				<input id="vote" type="number" name="vote">
				<span id="error_vote" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Nhà sản xuất</th>
			<td>
				<select name="id_producer">
					<?php foreach ($resume_producer as $each): ?>
						<option value="<?php echo $each['id'] ?>">
							<?php echo $each['name'] ?>
						</option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<th colspan="2">
				<button	type="submit" onclick="return check()">Thêm</button>
			</th>
		</tr>
	</table>
</form>
<script src="validate.js"></script>