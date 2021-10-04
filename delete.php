<?php

require 'db_connect.php';
require 'ext.php';
$id=$_GET["p_id"];

$res1=mysqli_query($conn,"SELECT * FROM product WHERE id=$id");

   print_r($res1);
while($row1=mysqli_fetch_array($res1)){
   
    $imag=$row1["p_image"];
}

unlink($imag);


if(mysqli_query($conn,"DELETE  FROM  product WHERE id=$id")){

//header('Location:display.php');


}





