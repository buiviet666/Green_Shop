<?php  

if (empty($_POST['name']
	|| $_POST['description']
	|| $_POST['detail']
	|| $_FILES['image']
	|| $_POST['price']
	|| $_POST['vote']
	|| $_POST['id_producer'])) 
{
	header('location:index.php?empty_insert');
	die();
}

$name = addslashes($_POST['name']);
$description = addslashes($_POST['description']);
$detail = addslashes($_POST['detail']);
$image = $_FILES['image'];
$price = addslashes($_POST['price']);
$vote = addslashes($_POST['vote']);
$id_producer = addslashes($_POST['id_producer']);

$folder='../../history_image/';
$file_extension = explode('.', $image['name'])[1];
$file_image_name=time() . '.' . $file_extension;
$path_file = $folder . $file_image_name;

move_uploaded_file($image["tmp_name"], $path_file);
require '../connect.php';

$query = "insert into product(name,description,detail,image,price,vote,id_producer)
values('$name','$description','$detail','$file_image_name','$price','$vote','$id_producer')";

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


