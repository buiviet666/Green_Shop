<?php  
if (empty($_POST['name']
	|| $_POST['gender']
	|| $_POST['phone']
	|| $_POST['identity']
	|| $_POST['address']
	|| $_POST['level']
	|| $_POST['wage']
	|| $_POST['account']
	|| $_POST['password'])) 
{
	header('location:index.php?empty_insert');
	die();
}

$name = addslashes($_POST['name']);
$gender = addslashes($_POST['gender']);
$phone = addslashes($_POST['phone']);
$identity = addslashes($_POST['identity']);
$address = addslashes($_POST['address']);
$level = addslashes($_POST['level']);
// die($level);
$wage = addslashes($_POST['wage']);
$account = addslashes($_POST['account']);
$password = addslashes($_POST['password']);

require '../connect.php';
$query = "insert into serve(name,gender,phone,identity,address,level,wage,account,password)
values('$name','$gender','$phone','$identity','$address','$level','$wage','$account','$password')";

mysqli_query($connect,$query);
$error= mysqli_error($connect);
if ($error){
	mysqli_close($connect);
	header('location:index.php?error_insert');
	die();
}
else{ 
	mysqli_close($connect);
	header('location:index.php?insert');
}

