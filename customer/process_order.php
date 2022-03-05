 <?php
session_start();
if (!isset($_SESSION['cart'])) {
	header('location: index.php?empty_cart');
}
$name_receiver = addslashes($_POST['name_receiver']);
$phone_receiver = addslashes($_POST['phone_receiver']);
$address_receiver = addslashes($_POST['address_receiver']);
$id_customer = $_SESSION['id'];
require '../admin/connect.php';
$cart = $_SESSION['cart'];


$total_price = 0;
foreach ($cart as $each) {
	$total_price += $each['quantity'] * $each['price'];
}
$status = 0;

$query_1 = "insert into `order`(id_customer, name_receiver, phone_receiver, address_receiver, status, total_price) 
values ('$id_customer', '$name_receiver', '$phone_receiver', '$address_receiver', '$status', '$total_price');";
mysqli_query($connect,$query_1);
$query_2 = "select max(id) from `order` where id_customer = '$id_customer'";
$resume = mysqli_query($connect,$query_2);
$id_order = mysqli_fetch_array($resume)['max(id)'];

foreach ($cart as $id_product => $each) {
	$quantity = $each['quantity'];
	$query = "insert into detail_order(id_order,id_product,quantity)
	values ('$id_order','$id_product','$quantity')";
	mysqli_query($connect,$query);
}

mysqli_close($connect);
unset($_SESSION['cart']);
header('location: index.php?success_order');
