<?php    
$page=1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}

$search='';
if (isset($_GET['search'])) {
  $search = $_GET['search'];
}

$id=$_GET['id'];
$query_quantity_value="
select count(*) 
from detail_order
join `order` on `order`.id = detail_order.id_order
join product on product.id = detail_order.id_product
join customer on `order`.id_customer = customer.id
where product.name like '%$search%' and id_order =$id";
$array_quantity_value = mysqli_query($connect,$query_quantity_value);
$resume_quantity_value=mysqli_fetch_array($array_quantity_value);
$quantity_value=$resume_quantity_value['count(*)'];

$quantity_value_one_page=5;

$quantity_page=ceil($quantity_value/$quantity_value_one_page);
$quantity_value_pass=$quantity_value_one_page*($page-1);

$query = "
select customer.first_name,customer.last_name,`order`.name_receiver,product.name,product.image,detail_order.quantity,product.price
from detail_order
join `order` on `order`.id = detail_order.id_order
join product on product.id = detail_order.id_product 
join customer on `order`.id_customer = customer.id
where product.name like '%$search%' and id_order =$id
group by customer.first_name,customer.last_name,`order`.name_receiver,product.name,product.image,detail_order.quantity,product.price
limit $quantity_value_one_page
offset $quantity_value_pass";
$resume=mysqli_query($connect,$query);
// die($resume);
// die($query);
mysqli_close($connect);