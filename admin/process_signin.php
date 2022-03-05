<?php  

$account = addslashes($_POST['account']);
$password = addslashes($_POST['password']);
if (isset($_POST['remember'])) {
	$remember = true;
}else{
	$remember = false;
}

require 'connect.php';

$query = "select * from serve 
where account ='$account' and password ='$password'";
$resume = mysqli_query($connect,$query);
$number_rows = mysqli_num_rows($resume);	
// die($resume);
// die('0');
if($number_rows == 1) {
	session_start();
	$each = mysqli_fetch_array($resume);
	$id =$each['id'];
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $each['name'];
	$_SESSION['level'] = $each['level'];
	$level = $each['level'];
	if ($remember) {
		$token = uniqid('user_',true);
		$query = "update serve set token = '$token' where id = '$id'";
		mysqli_query($connect,$query);
		setcookie('remember',$token, time() + 60*60*24*30);
		mysqli_close($connect);
		require 'level.php';
	
	}
	require 'level.php';
	mysqli_close($connect);
} else { 
	header('location:index.php?error');
	mysqli_close($connect);
}