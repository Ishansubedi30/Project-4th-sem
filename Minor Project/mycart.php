<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paskim</title>
  <!--  Links  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--  NABBAR  -->
<section class="nab-bar">
    <div class="container">
        <div class="image">
            <img src="./image/logo/logo.png" alt="Logo image" style="width: 70px; height: 65px;">
    </div>
    
       <div>
     <div class="nab-menu text-right">
      <ul>
        <li> <a href="./index.php">Home</a>  </li>
        <li> <a href="./about.html">About</a>  </li>
        <li> <a href="./foods.php">Foods</a>  </li>
        <li> <a href="./mycart.php" >My Cart</a>  </li>
        <li> <a href="./admin/login.php">Log-in</a>  </li>
      </ul>
    </div>
    <div class="space-fix"></div>
    </div>
</section>
<hr class="hrr">


<section class="menu">
  <div class="login">
<table class="text-center">
  <tr>
    <th>S no.</th>
    <th>Item Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Remove</th>
  </tr>
 <?php
 $total=0;
 if(isset($_SESSION['Cart']))
 {
 foreach ($_SESSION['Cart'] as $key => $value) {
  $total=$total+$value['Price'];
  $sr=$key+1;
   echo"
   <tr>
   <td>$sr</td>
   <td>$value[Item_Name]</td>
   <td>$value[Price]</td>
   <td>
   
   <input type='number' value='$value[Quantity]' min='1' max='10' >
   
   </td>
   <td>
   <form action='manage_cart.php' method='POST')>
   <button name='Remove_Item'>REMOVE</button>
   <input type='hidden' name='Item_Name' value='$value[Item_Name]' required>
   </form>
   </td>
   </tr>
   ";
 }
}
 ?>
</table>
</div>
</section>





<section class="catagories">
  <form action="connect.php" method="POST">
<div class="food_menu"><h4>
<label for= "name">Name</label>
<input type="text" class="price" id="name"  name="name" required><br>

<label for= "address">Address</label>
<input type="text" class="price" id="address"  name="address" required><br>

<label for= "email">Email</label>
<input type="email" class="price" id="email"  name="email" required><br>

<label for= "phone">Phone no:</label>
<input type="number" class="price" id="phone"  name="phone" required><br>
</h4>

</div>

</section>

<div class="total , catagories">
<h3>Total:</h3><br>
<h5><?php echo $total ?></h5><br>

  <button class="button btn-primary">Place Order</button>
</form>
<div class="space-fix"></div>
  </div>







 <section class="socials">
    <div class="container text-center">
        <ul>
            <li>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </li>
        </ul>
    </div> 
</section>

 <!--  Footer  -->

 <section class="Footer">
    <div class="container text-center">
        <p>All rights reserved. Desined by tream-Paskim</p>
    </div>  
</section>

</body>
</html>
