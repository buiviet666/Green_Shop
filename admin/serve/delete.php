<?php 
session_start();	
if (empty($_SESSION['level']))
{
	header('location:index.php?error');
	die();
}
$id =addslashes($_GET['id']);

require '../connect.php';

$query = "delete from serve where id='$id'";

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
