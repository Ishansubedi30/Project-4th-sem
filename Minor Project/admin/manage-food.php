<?php include('partials/menu.php'); 
include('connect.php'); 

?>



<div class="main-content">
	<div class="wrapper">
			<h1>MANAGE FOOD</h1>
				</div>


         <button class='btn btn-primary' ><a href="./add-food.php"  >ADD ITEM</a></button>
		
		
	</div>

	<div>
    

<table class="text-center">
	<thead>
  <tr>
    <th>S no.</th>
    <th>Item Name</th>
    <th>Catagory</th>
    <th>Discription</th>
    <th>Price</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  	<?php
      $sql = "Select * from `list`";
      $result=mysqli_query($con,$sql);
      if($result){
      	while($row=mysqli_fetch_assoc($result)){
      		$id=$row['id'];
      		$name=$row['name'];
      		$catagory=$row['catagory'];
      		$discription=$row['discription'];
      		$price=$row['price'];
      		$image=$row['image'];
      		echo '
             <tr>
             <td>'.$id.'</td>
             <td>'.$name.'</td>
             <td>'.$catagory.'</td>
             <td>'.$discription.'</td>
             <td>'.$price.'</td>
             <td>'.$image.'</td>
             <td>
	             <button><a href="update-food.php?updateid='.$id.'" class="btn-primary">Update</a></button>
	             <button><a href="delete-food.php?deleteid='.$id.'" class="btn-secondary">Delete</a></button>
             </td>
             </tr>
             

      		';

      	}
      }
  	?>
  </tbody>
 
  
</table>




	</div>

</div>


<?php include('partials/footer.php'); ?>
