<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../event.css">
	<title>SỬA SẢN PHẨM</title>
</head>
<body>
	<?php 	
	if (empty($_GET['id']))
	{
		header('location:index.php?empty_update');
	}
	$id=addslashes($_GET['id']);
	require '../connect.php';
	$query = "select * from product where id=$id";
	$resume = mysqli_query($connect,$query);
	$each = mysqli_fetch_array($resume);
	require '../connect.php';

	$query_producer = "select * from producer ";
	$resume_producer=mysqli_query($connect,$query_producer);
	mysqli_close($connect);	
	?>
	<form method="post" action="process_update.php?id=<?php echo $each['id']; ?>" enctype="multipart/form-data">
		<table width="60%" align="center" border="2px">
			<tr>
				<th colspan="2">SỬA SẢN PHẨM</th>
			</tr>
<!-- 			<tr>
				<th colspan="2"><input type="hidden" name="id" value="<?php echo $each['id'] ?>"></th>
			</tr> -->
			<tr>
				<th>Tên sản phẩm</th>
				<td>
					<input id="name" type="text" name="name" value="<?php echo $each['name'] ?>">
					<span id="error_name" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Mô tả</th>
				<td>
					<textarea id="description" name="description"><?php echo $each['description'] ?></textarea>
					<span id="error_description" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Nội dung</th>
				<td>
					<textarea id="detail" name="detail"><?php echo $each['detail'] ?></textarea>
					<span id="error_detail" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Đổi ảnh mới</th>
				<td><input type="file" name="new_image"></td>
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
				<th>Giá</th>
				<td>
					<input id="price" type="number" name="price" value="<?php echo $each['price'] ?>">
					<span id="error_price" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Đánh giá</th>
				<td>
					<input id="vote" type="number" name="vote" value="<?php echo $each['vote'] ?>"> 
					<span id="error_vote" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Nhà sản xuất</th>
				<td>
					<select name="id_producer">
						<?php foreach ($resume_producer as $each_producer): ?>
							<option 
							value="<?php echo $each_producer['id'] ?>" 
							<?php if ($each['id_producer'] == $each_producer['id']){ ?>
								selected
							<?php } ?>
							>
							<?php echo $each_producer['name'] ?>
						</option>
					<?php endforeach ?>
				</select>
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