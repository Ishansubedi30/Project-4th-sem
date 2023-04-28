<?php include('partials/menu.php'); 
$con=new mysqli('localhost','root', '','costumer-order'); 

?>


<div class="main-content">
	

	<div>
  <h2> Active </h2>  

<table class="text-center">
	<thead>
  <tr>
    <th>S no.</th>
    <th>Item Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Items</th>
    <th>Total</th>
    <th>Actions</th>
  </tr>
  </thead>
  <tbody>
  	<?php
      $sql = "Select * from `orders` where activity = 1";
      $result=mysqli_query($con,$sql);
      if($result){
      	while($row=mysqli_fetch_assoc($result)){
      		$id=$row['id'];
      		$name=$row['name'];
      		$address=$row['address'];
      		$email=$row['email'];
      		$phone=$row['phone'];
      		$items=$row['items'];
      		$total=$row['total'];
      		echo '
             <tr>
             <td>'.$id.'</td>
             <td>'.$name.'</td>
             <td>'.$address.'</td>
             <td>'.$email.'</td>
             <td>'.$phone.'</td>
             <td>'.$items.'</td>
             <td>'.$total.'</td>
             <td>
	             <button><a href="mark-order.php?doneid='.$id.'">Done</a></button>
	             <button><a href="delete-order.php?deleteid='.$id.'">Delete</a></button>
             </td>
             </tr>
             

      		';

      	}
      }
  	?>
  </tbody>
 
  
</table><br><br><br>

<h2> Done </h2> 
<table class="text-center">
	<thead>
  <tr>
    <th>S no.</th>
    <th>Item Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Items</th>
    <th>Total</th>
    <th>Actions</th>
  </tr>
  </thead>
  <tbody>
  	<?php
      $sql = "Select * from `orders` where activity = 0";
      $result=mysqli_query($con,$sql);
      if($result){
      	while($row=mysqli_fetch_assoc($result)){
      		$id=$row['id'];
      		$name=$row['name'];
      		$address=$row['address'];
      		$email=$row['email'];
      		$phone=$row['phone'];
      		$items=$row['items'];
      		$total=$row['total'];
      		echo '
             <tr>
             <td>'.$id.'</td>
             <td>'.$name.'</td>
             <td>'.$address.'</td>
             <td>'.$email.'</td>
             <td>'.$phone.'</td>
             <td>'.$items.'</td>
             <td>'.$total.'</td>
             <td>
	             
	             <button><a href="delete-order.php?deleteid='.$id.'">Delete</a></button>
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
