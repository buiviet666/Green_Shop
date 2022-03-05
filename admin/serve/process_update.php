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
	header('location:index.php?empty_update');
	die();
}


$id = addslashes($_GET['id']);
$name = addslashes($_POST['name']);
$gender = addslashes($_POST['gender']);
$phone = addslashes($_POST['phone']);
$identity = addslashes($_POST['identity']);
$address = addslashes($_POST['address']);
$level = addslashes($_POST['level']);
$wage = addslashes($_POST['wage']);
$account = addslashes($_POST['account']);
$password = addslashes($_POST['password']);

require '../connect.php';

$query = "update serve 
set
name='$name',
gender='$gender',
phone='$phone',
identity='$identity',
address='$address',
level='$level',
wage='$wage',
account='$account',
password='$password'
where
id='$id'
";
mysqli_query($connect,$query);
$error= mysqli_error($connect);
if ($error){
	mysqli_close($connect);
	header('location:index.php?error_update');
	die();
}
else{ 
	mysqli_close($connect);
	header('location:index.php?update');
}
