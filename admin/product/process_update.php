<?php  
if (empty($_GET['id']
	|| $_POST['name']
	|| $_POST['description']
	|| $_POST['detail']
	|| $_FILES['image']
	|| $_POST['price']
	|| $_POST['vote']
	|| $_POST['id_producer'])) 
{
	header('location:index.php?empty_update');
	die();
}
$id = addslashes($_GET['id']);
$name = addslashes($_POST['name']);
$description = addslashes($_POST['description']);
$detail = addslashes($_POST['detail']);
$new_image = $_FILES['new_image'];
if ($new_image['size'] > 0) {
	$folder='../../history_image/';
	$file_extension = explode('.', $new_image['name'])[1];
	$file_image_name=time() . '.' . $file_extension;
	$path_file = $folder . $file_image_name;

	move_uploaded_file($new_image["tmp_name"], $path_file);
}else{
	$file_image_name= addslashes($_POST['ole_image']);
}
$price = addslashes($_POST['price']);
$vote = addslashes($_POST['vote']);
$id_producer = addslashes($_POST['id_producer']);

require '../connect.php';

$query = "update product
set
name= '$name',
description= '$description',
detail= '$detail',
image= '$file_image_name',
price = '$price',
vote = '$vote',
id_producer = '$id_producer'
where
id ='$id'
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

