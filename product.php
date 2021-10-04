

<html>
<head>
    <title>Products</title>
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
height: 400px;
margin: 25px 50px 275px 450px;
border:1px solid;

border-radius: 10px;


}

.contanier{
  margin: 25px 50px 275px 450px;
  border-radius: 10px;
  
}

h1{

  text-align: center;
  margin-top: 30px;
}
  
  body{
    background-color: burlywood;
  }

</style>
<body>

<h1>Adding Product</h1>
<form action="product.php" method="post" enctype="multipart/form-data"> 
   <div class ="container">
     
     <?php

require 'db_connect.php';
require 'ext.php';

if(isset($_POST["submit"]))
{
    
    $file=$_FILES['image']['name'];
    $md=md5($file);
    $tmp_name=$_FILES['image']['tmp_name'];
    $dest="./pro_img/".$md;
    $upload= move_uploaded_file($tmp_name,$dest.$file);
     $dest1="pro_img/".$md.$file;
  $query="insert into product values('' ,'$_POST[name]',$_POST[price],$_POST[quantity],'$dest1','$_POST[category]','$_POST[desc]')";
  $res=mysqli_query($conn,$query);
  if($res){
   if($upload){
       echo "File successfully uploaded";
         header('Refresh:1; URL=admin.php');
   }
  }
   else{
       echo "File not uploaded";
   }

      
    
}


?>

    <table>
      <br>
      <br>
      <tr>
      <td>Product Name:</td>
      <td><input type="text" name="name" required></td>
      </tr>

      <tr>
      <td>Product Price:</td>
      <td><input type="text" name="price"required></td>
      </tr>

      <tr>
      <td>Product Quantity:</td>
      <td><input type="text" name="quantity" required></td>
      </tr>

      <tr>
    <td>Product Image:</td>
      <td> <input type="file" name="image"required></td>
      </tr>
      <td>Product Category:</td>
      <td> 
      <select name='category'>
      <option value="Kitchen">Kitchen</option>
      <option value="Electrical">Electrical</option>
        <option value="Furniture">Furniture</option>
        <option value="Other">Other</option>
      </td>
        </tr>
         <tr>
      <td>Product Descrption:</td>
      <td><input type="text" name="desc" required></td>
      </tr>

        
    </table>
    <input type="submit" name="submit">
   </div>
  
</form>

</body>
</html>