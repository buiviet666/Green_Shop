<?php 
if (empty($_SESSION['level']))
{
	header('location:index.php?error');
	die();
} ?>
<link rel="stylesheet" type="text/css" href="../event.css">
<form method="post" action="process_insert.php" enctype="multipart/form-data">
	<table width="50%" align="center" border="2px">
		<tr>
			<th colspan="2">THÊM NHÀ SẢN XUÂT</th>
		</tr>
		<tr>
			<th>Tên nhà sản xuất</th>
			<td>
				<input id="name" type="text" name="name">
				<span id="error_name" class="error_validate"></span>
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
			<th>Số điện thoại</th>
			<td>
				<input id="phone" type="text" name="phone">
				<span id="error_phone" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Địa chỉ</th>
			<td>
				<textarea id="address" name="address"></textarea>
				<span id="error_address" class="error_validate"></span>
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