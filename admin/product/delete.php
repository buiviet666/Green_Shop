<?php 
session_start();
if (empty($_SESSION['level']))
{
  header('location:index.php?error');
  die();
}
if (empty($_GET['id']))
{
	header('location:index.php?empty_delete');
	die();
}
$id =addslashes($_GET['id']);

require '../connect.php';

$query = "delete from product where id='$id'";

mysqli_query($connect,$query);
if ($error){
	mysqli_close($connect);
	header('location:index.php?error_delete');
	die();
}
else{ 
	mysqli_close($connect);
	header('location:index.php?delete');
}