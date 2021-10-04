<?php

require 'db_connect.php';
require 'nav.php';
session_start();
$id=$_GET["id"];
$quty=$_GET["quty"];
$cat=$_GET['p_category'];
$res1 =mysqli_query($conn,"select * from product where p_id=$id");
while($row1=mysqli_fetch_array($res1)){
    $img=$row1["p_image"];
    $name=$row1["p_name"];
    $price=$row1["p_price"];
    $item_id=$row1["p_id"];
    
  
}
   
    if(isset($_SESSION["shopping_cart"]))
    {
        
        $item_array_id=array_column($_SESSION["shopping_cart"] ,"item_id");
        if(!in_array($_GET["id"],$item_array_id)){
        
            $count=count($_SESSION["shopping_cart"]);
            $item_array=array(
                'item_id' =>$_GET["id"],
                'item_name' =>$name,
                'item_price' =>$price,
                'item_quantity' =>$quty
            );
            $_SESSION["shopping_cart"][$count]=$item_array;
        }
        else{
            echo '<script>alert("Item already added")</script>';
        
           
        }
    }
    else{
       
        $item_array=array(
            'item_id' =>$_GET["id"],
            'item_name' =>$name,
            'item_price' =>$price,
            'item_quantity' =>$quty
        );
        $_SESSION["shopping_cart"][0]=$item_array;

    }

  
   
?>

<html>
<head>
<title>cart</title>
</head>
<style>
    table,td,th{
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
    padding: 5px;
    text-align: left;    
}

.conbutton{
    border-radius:10px;
    outline:none;
    background-color:#32CD32;
    padding:10px;
   
    margin-right:250px;
    

}

input[type=submit]{
    border-radius:10px;
    outline:none;
    background-color:#32CD32;
    padding:10px;
    float:right;
    margin-right:250px;

}
.buybutton:hover{
    background-color:#F5F5F5;
    outline:none;
}
  
  body{
     background-color:bisque;
  }


</style>

<body>
<h2>Order Details</h2>
<table>
<div class="table">
    <table class="t_border">
    <tr>
        <th width="40%">Item Name</th>
        <th width="20%">Item price</th>
        <th width="10%">Item quantity</th>
        <th width="15%">Total</th>
        <!--<th width="5%">Action</th>-->
    </tr>
    <?php
    if(!empty($_SESSION["shopping_cart"])){
        $total=0;
        foreach($_SESSION["shopping_cart"] as $keys=>$values)
        {?>
            <tr>
                <td><?php echo $values["item_name"];?></td>
                <td><?php echo $values["item_price"];?></td>
                <td><?php echo $values["item_quantity"];?></td>
                <td><?php echo number_format($values["item_quantity"] * $values["item_price"] ,2);?></td>
            
            </tr>
            <?php
            $total=$total+($values["item_quantity"] *$values["item_price"]);
        }
            ?>
            <tr>
                <td colspan=3 text-align=center>Total</td>
                <td><?php echo number_format($total,2); ?></td>
            </tr><?php
        
          
    }
  ?>
<table>
<button class ="conbutton"><a href="applicance.php?p_category=<?php echo $cat;?>">Continue shopping</a></button>
  <form method="post" action="#">
    <input type="submit" name="submit" value="BuyNow">
    <?php $cc_id=$_SESSION['user_id'];
    
    if(isset($_POST['submit'])){
      
        $query="INSERT INTO cart VALUES($cc_id,$total)";
       $res=mysqli_query($conn,$query);
      if($res){
        
             header('Refresh:1; URL=userdetails.php');

       }
    }?>
   
</form>




</body>
</html>