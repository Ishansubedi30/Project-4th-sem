<?php

$con=new mysqli('localhost','root', '','costumer-order'); 

if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from `orders` where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:manage-order.php');
	}else{
		die(mysqli_error($con));
	}
}

?>