<?php

require 'db_connect.php';
require 'ext.php';
require 'nav.php';
$cat=$_GET['p_category'];

$res=mysqli_query($conn,"select * from  product where p_category='$cat'");
while($row=mysqli_fetch_array($res)){?>
 
    <div class="col">
        <div class="product_image">
           <div class="w3-card-4 w3-green"> 
                
                <img src ="/dbms/<?php echo $row["p_image"];?>" alt="" width="300" height="300"/>
                <p><?php echo "Name:".$row["p_name"];?></p>
                <p><?php echo "Price:".$row["p_price"];?></p>
                <a href="product_desc.php?id=<?php echo $row["p_id"];?>&p_category=<?php echo $cat;?>">View Details</a><br>
          </div>
            
           
        </div>
    </div>
<?php    

}

if($cat=="Kitchen"){?>
  <style>
    body{
      background-image:url(pho/kitchen.png);
       background-attachment: local;
         background-repeat: no-repeat;
      background-blend-mode: soft-light;
      opacity: 2;
      filter: alpha(opacity=100);
    }
</style>
<?php }

if($cat=="Electrical"){?>
  <style>
    body{
      background-image:url(pho/wall.jpg);
       background-attachment: local;
         background-repeat:repeat;
       background-blend-mode: soft-light;
      opacity: 2;
      filter: alpha(opacity=100);
    }
</style>
<?php }

if($cat=="Furniture"){?>
  <style>
    body{
      background-image:url(pho/wood.jpg);
       background-attachment: local;
         background-repeat:repeat;
       background-blend-mode: soft-light;
      opacity: 2;
      filter: alpha(opacity=100);
    }
</style>
<?php }

?>

<html>
<head>
<title>Applicance</title>
</head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.product_image{
    float:left;
    padding:30px;
}



</style>
<body>

</html>
