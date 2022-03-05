<?php  
if (empty($_SESSION['level']))
{
  header('location:index.php?error');
  die();
}
$page=1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}

$search='';
if (isset($_GET['search'])) {
  $search = $_GET['search'];
}
$query_quantity_value="select count(*) from producer where name like '%$search%'";
$array_quantity_value = mysqli_query($connect,$query_quantity_value);
$resume_quantity_value=mysqli_fetch_array($array_quantity_value);
$quantity_value=$resume_quantity_value['count(*)'];

$quantity_value_one_page=3;

$quantity_page=ceil($quantity_value/$quantity_value_one_page);
$quantity_value_pass=$quantity_value_one_page*($page-1);

$query = "select * from producer 
where 
name like '%$search%' 
limit $quantity_value_one_page
offset $quantity_value_pass";
$resume=mysqli_query($connect,$query);