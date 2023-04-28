<?php include('partials/menu.php'); 
include('connect.php');

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$catagory = $_POST['catagory'];
	$discription = $_POST['discription'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$sql ="insert into `list` (name,catagory,discription,price,image)
	values('$name','$catagory','$discription','$price','$image')";

	$result=mysqli_query($con,$sql);
	if($result){
		header('location:manage-food.php');
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
			<input type="text" name="name" placeholder="Name" required>

			<label>Catagory</label>
			<input type="text" name="catagory" placeholder="Catagory" required><br><br>

			<label>Discription</label>
			<input type="text" name="discription" placeholder="Short Discription" required>

			<label>Price</label>
			<input type="number" name="price" placeholder="eg. 100" required><br><br>

			<label>Image</label>
			<input type="text" name="image" placeholder="eg ./image/chicken.jepg" required><br><br>

         <button type="submit" name="submit" class='btn btn-primary'>Add</button>
		
		</form>
	</div>

</div>


<?php include('partials/footer.php'); ?>
