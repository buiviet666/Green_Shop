<?php  
if (empty($_GET['id']
	|| $_POST['name']
	|| $_FILES['image']
	|| $_POST['phone']
	|| $_POST['address'])) 
{
	header('location:index.php?empty_update');
	die();
}
$id = addslashes($_GET['id']);
$name = addslashes($_POST['name']);
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
$phone = addslashes($_POST['phone']);
$address = addslashes($_POST['address']);

require '../connect.php';

$query = "update producer 
set
name='$name',
image='$file_image_name',
phone='$phone',
address='$address'
where
id='$id'";

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


