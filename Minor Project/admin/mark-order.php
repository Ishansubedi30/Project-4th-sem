<?php



	$con=new mysqli('localhost','root', '','costumer-order'); 

if(isset($_GET['doneid'])){
	$id=$_GET['doneid'];
	$sql="update `orders` set activity=0 where id=$id ";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:manage-order.php');
	}else{
		die(mysqli_error($con));
	}
}

?>
?>