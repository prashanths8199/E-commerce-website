
<html>
<head>
<title>Description</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.col{
    float: left;
    width: 30%;
    padding: 15px;
    
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

input[type=submit] {
     border-radius: 10px;
     padding: 5px;
     outline:none;
     background-color:#32CD32;
}

input[type=submit]:hover {
    background-color:#F5F5F5;
}

.cartbutton{
    border-radius:10px;
    outline:none;
    background-color:#32CD32;
    padding:7px;

}
.cartbutton:hover{
    background-color:#F5F5F5;
    outline:none;
}

</style>
<body>



<?php
require 'db_connect.php';
require 'ext.php';
require 'nav.php';
$id=$_GET["id"];
$cat=$_GET['p_category'];
$res1 =mysqli_query($conn,"select * from product where p_id=$id");
while($row1=mysqli_fetch_array($res1)){
    $img=$row1["p_image"];
    $name=$row1["p_name"];
    $price=$row1["p_price"];
    $qty=$row1["p_quantity"];
    $desc=$row1["p_desc"];
  
}
$res =mysqli_query($conn,"select * from product where p_id=$id");
while($row=mysqli_fetch_array($res)){

    ?>
    <div class="row">
    <form action="product_desc.php?id=<?php echo $row["p_id"]; ?>&p_category=<?php echo $cat;?>" method="post">
        <div class="col">
            <img src="../dbms/<?php echo $row["p_image"]; ?>"width="300" height="300" />
        </div> 
    

        <div class="col">
            <h2>Name:<?php echo $row["p_name"]; ?></h2>
            <p>ID:<?php echo $row["p_id"]; ?></p>
            
                <span>Price:<?php echo $row["p_price"]; ?></span><br>
                <label>Quantity:</label>
                <input type="text" name="quty" value="1"/>
                <input type="submit" name="submit" value="Check Quantity"><br>
                 <span>Descrption:<?php echo $row["p_desc"]; ?></span><br>
               
               <?php
                if(isset($_POST['submit'])){
                    $resu=$row['p_quantity']-$_POST['quty'];
                  if($resu<0){      
                     ?>
                      <strong>Available quantity:<?php echo $row["p_quantity"]; ?></strong>
                      <?php
                   } 
                   else{
                       echo "Available ";
                       if (mysqli_query($conn,"UPDATE product SET p_quantity='$resu' WHERE p_id=$id")) {
                        
                       }
                       ?>
                       <br><button class ="cartbutton"><a href="cart.php?id=<?php echo $row["p_id"];?> &quty=<?php echo $_POST['quty'];?>&p_category=<?php echo $cat;?>">Add to cart</a></button>
                        <?php
                   }
                
                }
                 ?> 
                
            <p><b>Condition:</b>New</p>
        <div>
    </div>
    </form>
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
         background-repeat: repeat;
       background-blend-mode: soft-light;
      opacity: 2;
      filter: alpha(opacity=100);
    }
</style>
    <?php  }
      
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
  

</body>
</html>

