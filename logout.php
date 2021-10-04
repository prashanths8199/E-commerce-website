<?php
require 'ext.php';
$query="delete from cart";
mysqli_query($conn,$query);
$query1="delete from billform";
mysqli_query($conn,$query1);
session_destroy();
header('Location:home.php');


?>