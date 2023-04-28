<?php 
session_start();

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$activity=TRUE;
$items = " " ; 


foreach ($_SESSION['Cart'] as $key => $value){
  $json = json_encode($value['Item_Name']); 
  $items .= $json;
}


$total=0;
 if(isset($_SESSION['Cart']))
 {
 foreach ($_SESSION['Cart'] as $key => $value) {
  $total=$total+$value['Price'];
}
}
//database connection 
$conn = new mysqli('localhost','root','','costumer-order');
if($conn->connect_error){
	die('Connection Failed: '.$conn->connect_error);
}else{
      $stmt= $conn->prepare("insert into orders(name, address, email, phone, items, total ,activity) 
      	values(?,?,?,?,?,?,?)");
      $stmt->bind_param("sssisis",$name, $address, $email, $phone, $items, $total , $activity);
      $stmt->execute();
   echo"<script>
	alert('Order Submitted Sucessfully.....');
	window.location.href='mycart.php';
	</script>";
      session_unset();
      $stmt->close();
      $conn->close();
       
}
?>