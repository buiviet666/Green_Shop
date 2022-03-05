<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../event.css">
	<title>SỬA NHÀ SẢN XUẤT</title>
</head>
<body>
	<?php 	
	if (empty($_GET['id']))
	{
		header('location:index.php?empty_update');
	}
	$id=addslashes($_GET['id']);
	require '../connect.php';
	$query = "select * from producer where id=$id";
	$resume = mysqli_query($connect,$query);
	$each = mysqli_fetch_array($resume);
	?>
	<form method="post" action="process_update.php?id=<?php echo $each['id']; ?>" enctype="multipart/form-data">
		<table width="60%" align="center" border="2px">
			<tr>
				<th colspan="2">SỬA NHÀ SẢN XUẤT</th>
			</tr>
<!-- 			<tr>
				<th colspan="2"><input type="hidden" name="id" value="<?php echo $each['id'] ?>"></th>
			</tr> -->
			<tr>
				<th>Đổi ảnh mới</th>
				<td>
					<input type="file" name="new_image">
				</td>
			</tr>
			<tr>
				<th>Giữ ảnh cũ</th>
				<td>
					<img height="100px" src="../../history_image/<?php echo $each['image'] ?>">
					<input id="image" type="hidden" name="ole_image" value="<?php echo $each['image'] ?>">
					<span id="error_image" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Tên nhà sản xuất</th>
				<td>
					<input id="name" type="text" name="name" value="<?php echo $each['name'] ?>">
					<span id="error_name" class="error_validate"></span>
				</td> 
			</tr>
			<tr>
				<th>Số điện thoại</th>
				<td>
					<input id="phone" type="text" name="phone" value="<?php echo $each['phone'] ?>">
					<span id="error_phone" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Địa chỉ</th>
				<td>
					<textarea id="address" name="address"><?php echo $each['name'] ?></textarea>
					<span id="error_address" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<button	type="submit" onclick="return check()">Cập nhật</button>
				</th>
			</tr>
		</table>
	</form>
	<script src="validate.js"></script>
</body>
</html>