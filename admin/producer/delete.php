<?php 
if (empty($_GET['id']))
{
	header('location:index.php?empty_delete');
	die();
}

$id =addslashes($_GET['id']);

require '../connect.php';

$query = "delete from producer where id='$id'";

mysqli_query($connect,$query);
$error= mysqli_error($connect);
if ($error){
	mysqli_close($connect);
	header('location:index.php?error_delete');
	die();
}
else{ 
	mysqli_close($connect);
	header('location:index.php?delete');
}