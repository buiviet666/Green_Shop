<?php 
session_start();
$id =addslashes($_GET['id']);

require '../admin/connect.php';
$query = "delete from detail_order where id_order='$id'";
mysqli_query($connect,$query);

$query = "delete from `order` where id='$id'";
mysqli_query($connect,$query);
$error= mysqli_error($connect);
if ($error){
	mysqli_close($connect);
	header('location:index.php?error_delete');
}else{
	header('location:user.php');
}
