<?php 
	session_start();
	if (isset($_COOKIE['remember'])) {
		$token = $_COOKIE['remember'];
		require 'connect.php';
		$query = "select * from serve where token = '$token' limit 1";
		$resume = mysqli_query($connect,$query);
		$number_rows = mysqli_num_rows($resume);
		if ($number_rows == 1) {
			$each = mysqli_fetch_array($resume);
			$_SESSION['id'] = $each['id'];
			$_SESSION['name'] = $each['name'];
			$_SESSION['level'] = $each['level'];
			$level = $each['level'];
			if (isset($_SESSION['id'])) {
				require 'level.php';
				exit;
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>ĐĂNG NHẬP ADMIN</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>ĐĂNG NHẬP ADMIN</h1>
			<?php 
			if (isset($_GET['error'])){
				?>
				<span style="color: red;"><?php echo 'KHÔNG ĐĂNG NHẬP ĐƯỢC THỬ LẠI SAU'; ?></span>
				<?php  
			}
			?>
			<form class="form" method="post" action="process_signin.php">
				<input class="input_signin" name="account" type="text" placeholder="Tài khoản">
				<input class="input_signin" name="password"  type="password" placeholder="Mật khẩu">
				Ghi nhớ đăng nhập
				<input type="checkbox" name="remember">
				<br>
				<button type="submit" id="login-button">Đăng nhập</button>
			</form>
		</div>

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
