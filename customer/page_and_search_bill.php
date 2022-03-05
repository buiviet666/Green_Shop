<?php    
$page=1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}

$search='';
if (isset($_GET['search'])) {
  $search = $_GET['search'];
}
$id_customer = $_SESSION['id'];

$query = "
select  `order`.id,customer.first_name,customer.last_name,`order`.name_receiver,`order`.phone_receiver,`order`.address_receiver, `order`.status,`order`.date_order,`order`.total_price 
from `order`
join customer on `order`.id_customer = customer.id
where `order`.id_customer ='$id_customer'
group by `order`.id,customer.first_name,customer.last_name,`order`.name_receiver,`order`.phone_receiver,`order`.address_receiver, `order`.status,`order`.date_order,`order`.total_price 
";
$resume=mysqli_query($connect,$query);