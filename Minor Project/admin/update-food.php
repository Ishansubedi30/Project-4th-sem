<?php include('partials/menu.php'); 
include('connect.php');

$id=$_GET['updateid'];
$sql="Select * from `list` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$catagory=$row['catagory'];
$discription=$row['discription'];
$price=$row['price'];
$image=$row['image'];


if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$catagory = $_POST['catagory'];
	$discription = $_POST['discription'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$sql ="update `list` set id=$id, name='$name' ,catagory='$catagory' ,discription='$discription' ,price='$price' ,image='$image' where id=$id ";

	$result=mysqli_query($con,$sql);
	if($result){
		header('location:manage-food.php');
	}else{
		die(mysqli_error($con));
	}

}




?>


<div class="main-content">
	<div class="wrapper">
			<h1>MANAGE FOOD</h1>
				</div>

	<div>


		<form method="POST">
			<label>Name</label>
			<input type="text" name="name" placeholder="Name" required value=<?php echo $name ?> >

			<label>Catagory</label>
			<input type="text" name="catagory" placeholder="Catagory" required value=<?php echo $catagory ?>><br><br>

			<label>Discription</label>
			<input type="text" name="discription" placeholder="Short Discription" required value=<?php echo $discription ?>>

			<label>Price</label>
			<input type="number" name="price" placeholder="eg. 100" required value=<?php echo $price ?>><br><br>

			<label>Image</label>
			<input type="text" name="image" placeholder="eg ./image/chicken.jepg" required value=<?php echo $image ?>><br><br>

         <button type="submit" name="submit">Update</button>
		
		</form>
	</div>

</div>


<?php include('partials/footer.php'); ?>
