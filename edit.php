<?php

require 'db_connect.php';
require 'ext.php';
$id=$_GET["id"];
$res=mysqli_query($conn,"SELECT * FROM product where p_id=$id");

while($row=mysqli_fetch_array($res)){
  $p_name=$row['p_name'];
   $p_price=$row['p_price'];
   $p_quantity=$row['p_quantity'];
   $p_image=$row['p_image'];
   $p_category=$row['p_category'];
   $p_desc=$row['p_desc'];
  
  
}

?>


<html>
<head>
<title>Update</title>
</head>
  <style>

  input[type=text] {
    width: 200px;
    padding:5px;
    margin: 8px 0;
    border: 3px solid #ccc;
    border-radius: 10px;
    outline: none;

}



input[type=text]:focus {
    border: 3px solid #555;
     border-radius: 10px;
}

input[type=password]:focus {
    border: 3px solid #555;
     border-radius: 10px;
}

input[type=submit] {
     border-radius: 10px;
     padding: 10px
}

.header{
    margin-top:25px 50px 275px 450px;
    text-align: center;
    border-bottom:none;
    padding:20px;
    background-color: #ffa500;
    border-radius: 10px;
}




form{
width:400px;
height: 450px;
margin: 25px 50px 275px 450px;
border:1px solid;

border-radius: 10px;


}

.contanier{
  margin: 25px 50px 275px 450px;
  border-radius: 10px;
  
}



h2{

  text-align: center;
  margin-top: 30px;
}
  
  </style>
  <body>
    <h2>Update Items</h2>
    <form action="#" method="post" enctype="multipart/form-data"> 
<div class ="container">

    <table>
      <tr>
      <td colspan="2" align="center">
        <img src="<?php echo $p_image;?>" height="100" width="100">
        </td>
      </tr>
      
      <tr>
      <td>Product Name:</td>
      <td><input type="text" name="name" value="<?php echo $p_name;?>"></td>
      </tr>

      <tr>
      <td>Product Price:</td>
      <td><input type="text" name="price" value="<?php echo $p_price;?>"></td>
      </tr>

      <tr>
      <td>Product Quantity:</td>
      <td><input type="text" name="quantity" value="<?php echo $p_quantity;?>"></td>
      </tr>

      <tr>
    <td>Product Image:</td>
      <td> <input type="file" name="image" ></td>
      </tr>
      
      <tr>
      <td>Product Category:</td>
      <td><input type="text" name="pcategory" value="<?php echo $p_category;?>"></td>
      </td>
      </tr>
        <tr>
      <td>Product Descrption:</td>
      <td><input type="text" name="desc" value="<?php echo $p_desc;?>" required></td>
      </tr>
    </table>
    <input type="submit" name="submit" value="Update">
   </div>
  

  <?php
  if(isset($_POST["submit"]))
  {
    $fnm=$_FILES['image']['name'];
    if($fnm==""){
      mysqli_query($conn,"update product set p_name='$_POST[name]',p_price='$_POST[price]',p_quantity='$_POST[quantity]',p_category='$_POST[pcategory]',p_desc='$_POST[desc]' where p_id=$id");
      header('Location:admin.php');
    }
    else{
      $file=$_FILES['image']['name'];
    $md=md5($file);
    $tmp_name=$_FILES['image']['tmp_name'];
    $dest="./pro_img/".$md;
   $upload= move_uploaded_file($tmp_name,$dest.$file);
      mysqli_query($conn,"update product set p_image='$dest',p_name='$_POST[name]',p_price='$_POST[price]',p_quantity='$_POST[quantity]',p_category='$_POST[pcategory]',p_desc='$_POST[desc]' where p_id=$id");
            header('Location:admin.php');
      
      
    }?>
    </form>
  
  <?php
  }?>

  
  
  </body>
</html>