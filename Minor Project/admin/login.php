
<?php include('../config/constants.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>


<section class="nab-bar">
    <div class="container">
        <div class="image">
            <img src="../image/logo/logo.png" alt="Logo image" style="width: 70px; height: 65px;">
    </div>
    
       <div>
     <div class="nab-menu text-right">
      <ul>
        <li> <a href="../index.php">Home</a>  </li>
        <li> <a href="../about.html">About</a>  </li>
        <li> <a href="../foods.php">Foods</a>  </li>
       <li><a href="../mycart.php" class="btn btn-outline-success">My Cart</a>  </li>
         <li> <a href="./admin/login.php">Log-in</a>  </li>
      </ul>
    </div>
    <div class="space-fix"></div>
    </div>
</section>








	<div class="login">
		<h1 class="text-center">Login</h1>
		<br><br>

		<?php
if(isset($_SESSION['no-login-message']))
{
	echo $_SESSION['no-login-message'];
	unset($_SESSION['no-login-message']);

}
	
if(isset($_SESSION['login']))
{
	echo $_SESSION['login'];
	unset($_SESSION['login']);

}
		?><br>


<form action="" method="POST" class="text-center">
	Username: <br>
	<input type="text" name="username" placeholder="enter user name"><br><br>
	Password:<br>
	<input type="password" name="password" placeholder="enter Password"><br><br>
	<input type="submit" name="submit" value="login" class="btn-primary"><br><br>
</form>

		
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
        <p>All rights reserved. Designed by team-Paskim</p>
    </div>  
</section>


</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = md5($_POST['password']);


	$sql = "SELECT * FROM tbl_admin WHERE username ='$username' AND password='$password'";
	$res = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($res);
	if($count==1)
	{

		$_SESSION['login'] = "<div class='success text-center'>Login Success</div>";
		$_SESSION['user'] = $username;
		header('location:'.SITEURL.'Project-4th-sem/Minor Project/admin/manage-admin.php');

	}
	else
	{
        $_SESSION['login'] = "<div class='error text-center'>Login Failed</div>";
		header('location:'.SITEURL.'Project-4th-sem/Minor Project/admin/login.php');

	}
}


?>