<?php

require 'db_connect.php';
require 'ext.php';
 $id=$_SESSION['user_id'];
$sql ="Select * from billform where c_id=$id";
       $res = mysqli_query($conn,$sql);
           
        $row=mysqli_fetch_array($res);
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $city = $row['city'];
            $pincode = $row['pincode'];
        
    
?>

<html>
<head>
<title>Conform</title>

<style>
  
 table,th,td{
     text-align:left;
 }
.user{
    margin-top:0px;
    border:2px solid;
    border-radius:10px;
    width:400px;
    height:250px;
   

}
header{
    border-bottom:2px solid;
    border-radius:10px;
    width:400px;
    height:80px;   
}

h2{
    text-align:center;
}

.pay{
    margin-top:80px;
    border:2px solid;
    border-radius:10px;
    width:400px;
    height:220px;
}

.cen{
    margin-left:450px;
}



</style>
</head>
<body>
<h2>Order has benn sucessfully placed!!</h2>
<div class=cen>
<header>
<div class=user>
<h2>INFORMATION</h2>
</header>

    <table class="w3-table ">
    
    <tr><th>Name:</th>
    <th><?php echo $firstname.$lastname ?></th><br>                             
    </tr>
    <tr>
    <th>Email:</th>
    <th><?php echo $email ?></th><br>                              
     </tr>
    <tr>
     <th>City:</th>
    <th><?php echo $city ?></th><br>                               
     </tr>
     <th>Pincode: </th>
    <th><?php echo $pincode?></th><br>                              
     </tr>
     </table>
</div>
</div>

<div class=cen>
<div class=pay>
<header>
<h2>PAYMENT TYPE</h2></header>
<b><p>Payment:Cash On delivery</p></b>
<b><p>Total Amt:
<?php 
$query="select * from cart where ca_id=$id";
$res = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res)){
    echo $total=$row['total'];
}
?>
<p>Deliver:With in 2days</p>
</div>
</div>