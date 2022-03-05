<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../event.css">
	<title>SỬA NHÂN VIÊN</title>
</head>
<body>
	<?php 	
	if (empty($_GET['id']))
	{
		header('location:index.php?empty_update');
	}
	$id=addslashes($_GET['id']);
	require '../connect.php';
	$query = "select * from serve where id=$id";
	$resume = mysqli_query($connect,$query);
	$each = mysqli_fetch_array($resume);
	?>
	<form method="post" action="process_update.php?id=<?php echo $each['id']; ?>">
		<table width="60%" align="center" border="2px">
			<tr>
				<th colspan="2">SỬA NHÂN VIÊN</th>
			</tr>
<!-- 			<tr>
				<th colspan="2"><input type="hidden" name="id" value="<?php echo $each['id'] ?>"></th>
			</tr> -->
			<tr>
				<th>Họ và tên</th>
				<td>
					<input id="name" type="text" name="name" value="<?php echo $each['name'] ?>">
					<span id="error_name" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Giới tính</th>
				<td>
					<input type="radio" name="gender" value="Nam" 
					<?php 
					if ($each['gender'] == "Nam") {
						echo "checked";
					}
					?>
					>Nam
					<input type="radio" name="gender" value="Nữ"
					<?php 
					if ($each['gender'] == "Nữ") {
						echo "checked";
					}
					?>
					>Nữ
					<input type="radio" name="gender" value="Khác"
					<?php 
					if ($each['gender'] == "Khác") {
						echo "checked";
					}
					?>
					>Khác
					<span id="error_gender" class="error_validate"></span>
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
				<th>CCCD</th>
				<td>
					<input id="identity" type="text" name="identity" value="<?php echo $each['identity'] ?>">
					<span id="error_identity" class="error_validate"></span>
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
				<th>Cấp bậc</th>
				<td>
					<select id="level" name="level">	
						<option value="1" <?php if ($each['level'] == 1){ ?>
							selected
						<?php } ?>>
							Nhân Viên
						</option>
						<option value="2" <?php if ($each['level'] == 2){ ?>
							selected
						<?php } ?>>
							Quản Lý
						</option>
					</select>

					<span id="error_level" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Lương</th>
				<td>
					<input id="wage" type="text" name="wage" value="<?php echo $each['wage'] ?>">
					<span id="error_wage" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Tài khoản</th>
				<td>
					<input id="account" type="text" name="account" value="<?php echo $each['account'] ?>">
					<span id="error_account" class="error_validate"></span>
				</td>
			</tr>
			<tr>
				<th>Mật khẩu</th>
				<td>
					<input id="password" type="text" name="password" value="<?php echo $each['password'] ?>">
					<span id="error_password" class="error_validate"></span>
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