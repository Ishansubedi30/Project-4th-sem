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
       <li><a href="./mycart.php" class="btn btn-outline-success">My Cart</a>  </li>
         <li> <a href="./admin/login.php">Log-in</a>  </li>
      </ul>
    </div>
    <div class="space-fix"></div>
    </div>
</section>

 <!-- START search section -->
<section class="food-search text-center">
    <div class="container">
    <form method="POST">
        <input type="search" name="search" placeholder="Search an item..">
        <input type="submit" name="submit" value="search" class="button btn-primary">
     </form>
    </div>
</section>

<?php 
$con = new PDO("mysql:host=localhost;dbname=food-menu",'root','',);

if(isset($_POST["submit"])){
    $str = $_POST["search"];
    $sth = $con ->prepare("SELECT * FROM `list` WHERE Name= '$str' ");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    if($row = $sth->fetch() )
      {
         ?>
         <section class="menu">
    <div class="container">
        <h2 class="text-center">Searched Item</h2>

         <form action="manage_cart.php" method="POST">
        <div class="food_menu">
            <div class="food_menu_img"> 
                <img src=<?php echo $row->image; ?> alt= <?php echo $row->name; ?> class="img-responsive img-curve">
            </div>
            <div class="food_menu_disc">
                <h4><?php echo $row->name; ?></h4>
                <p class="price"><?php echo $row->price; ?></p>
                <p class="detail"><?php echo $row->discription; ?></p><br>
                <button type="submit" name="Order_now" class="button btn-primary">Order now</button>
                <input type="hidden" name="Item_Name" value=<?php echo $row->name; ?>>
                <input type="hidden" name="Price" value=<?php echo $row->price; ?>>
            </div>
            <div class="space-fix"></div>
        </div></form>
        <div class="space-fix"></div>

        </div>  
</section>
<?php

      }
      
      else{
       ?> <section class="menu"> <div class="container"><h2 class="text-center">Item Not Found</h2></div></section>
       <?php
      }
}
?>

<!-- END search section -->

    <!--  Catagories  -->

<section class="catagories">
    <div class="container">
        <h2 class="text-center">Catagories</h2>
        <a href="./foods.php">
        <div class="box float-container">
            <img src="./image/momos/chicken.jpg" alt="momos" class="img-responsive img-curve">
            <h3 class="float-text ">MOMOS</h3>
        </div>
        </a>
        <a href="./foods.php">
        <div class="box float-container">
            <img src="./image/chowmein/chicken.png" alt="chowmein" class="img-responsive img-curve">
            <h3 class="float-text ">CHOWMEIN</h3>
        </div>
        </a>
        <a href="./foods.php">
        <div class="box float-container">
            <img src="./image/burgerSand/chicken.jpg" alt="burger" class="img-responsive img-curve">
            <h3 class="float-text ">BURGER</h3>
        </div>
        </a>
        <div class="space-fix"></div>
    </div>   
</section>

     <!--  Menu  -->

 <section class="menu">
    <div class="container">
        <h2 class="text-center"> Our Menu</h2>


        <form action="manage_cart.php" method="POST">
        <div class="food_menu">
            <div class="food_menu_img"> 
                <img src="./image/momos/buff-momo.jpg" alt="buff momo" class="img-responsive img-curve">
            </div>
            <div class="food_menu_disc">
                <h4>Buff Momo</h4>
                <p class="price">Rs 90</p>
                <p class="detail">Steam Buff Momo</p><br>
                <button type="submit" name="Order_now" class="button btn-primary">Order now</button>
                <input type="hidden" name="Item_Name" value="Buff momo">
                <input type="hidden" name="Price" value="90">
                
            </div>
            <div class="space-fix"></div>
        </div></form>



        <form action="manage_cart.php" method="POST">
        <div class="food_menu">
            <div class="food_menu_img"> 
                <img src="./image/chowmein/veg.png" alt="veg chowmein" class="img-responsive img-curve">
            </div>
            <div class="food_menu_disc">
                <h4>Veg. Chowmein</h4>
                <p class="price">Rs 100</p>
                <p class="detail">Veg Chowmein</p><br>
                <button type="submit" name="Order_now" class="button btn-primary">Order now</button>
                <input type="hidden" name="Item_Name" value="Veg. Chowmei">
                <input type="hidden" name="Price" value="100">
            </div>
            <div class="space-fix"></div>
        </div></form>



        <form action="manage_cart.php" method="POST">
        <div class="food_menu">
            <div class="food_menu_img"> 
                <img src="./image/burgerSand/cheese.jpg" alt="cheese" class="img-responsive img-curve">
            </div>
            <div class="food_menu_disc">
                <h4>Cheese Burger</h4>
                <p class="price">Rs 250</p>
                <p class="detail">Chicken Cheese Burger</p><br>
                <button type="submit" name="Order_now" class="button btn-primary">Order now</button>
                <input type="hidden" name="Item_Name" value="Cheese Burger">
                <input type="hidden" name="Price" value="250">
            </div>
            <div class="space-fix"></div>
        </div></form>




        <form action="manage_cart.php" method="POST">
        <div class="food_menu">
            <div class="food_menu_img"> 
                <img src="./image/veg/fries.jpg" alt="fries" class="img-responsive img-curve">
            </div>
            <div class="food_menu_disc">
                <h4>Fries</h4>
                <p class="price">Rs 120</p>
                <p class="detail">French Fries</p><br>
                <button type="submit" name="Order_now" class="button btn-primary">Order now</button>
                <input type="hidden" name="Item_Name" value="Fries">
                <input type="hidden" name="Price" value="120">
            </div>
            <div class="space-fix"></div>
        </div></form>

       

        
        <div class="space-fix"></div>
    </div>  
</section>

 <!--  Socials  -->

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