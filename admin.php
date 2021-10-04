<?php


require 'db_connect.php';
require 'ext.php';

if(isset($_POST["add"])){
    header('Location:product.php');
    
}

if(isset($_POST["display"])){
    header('Location:display.php');
    
}

if(isset($_POST["user"])){
    header('Location:userinfo.php');
    
}
?>

<html>
<head>
<title>Admin</title>
</head>
<style>

body{
    background-color:slateblue;
}

form{
   margin-left: 560px;
}

input[type=submit] {
     border-radius: 10px;
     padding: 10px;
     outline:none;
}


  
  
  
  h1{
    text-align: center;
  }
  
</style>
<body>
<h1>Welcome Admin!!</h1>
<form action="<?php echo $current_file; ?>" method="post">
  <div class="con>"
<br><br><input type="submit" name="add" value="add products"><br><br>
  <marquee>Add Product   Add Product       Add Product        Add Product     Add Product        Add Product      Add Product     </marquee>
<input type="submit" name="display" value="dispaly products">
  <marquee>Display Product    Display Product       Display Product        Display Product     Display Product        Display Product      Display Product     </marquee>
<br><br><input type="submit" name="user" value="UserInformation">
  </div>
</form>
</body>
</html>