<?php 
include('../config/constants.php');

session_destroy();
header('location:'.SITEURL.'Project-4th-sem/Minor Project/admin/login.php');


?>