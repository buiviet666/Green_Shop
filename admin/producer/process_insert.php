<?php  
if (empty($_POST['name']
	|| $_FILES['image']
	|| $_POST['phone']
	|| $_POST['address'])) 
{
	header('location:index.php?empty_insert');
	die();
}

$name = addslashes($_POST['name']);
$image = $_FILES['image'];
$phone = addslashes($_POST['phone']);	
$address = addslashes($_POST['address']);

$folder='../../history_image/';
$file_extension = explode('.', $image['name'])[1];
$file_image_name=time() . '.' . $file_extension;
$path_file = $folder . $file_image_name;

move_uploaded_file($image["tmp_name"], $path_file);

require '../connect.php';

$query = "insert into producer(name,image,phone,address)
values('$name','$file_image_name','$phone','$address')";

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

