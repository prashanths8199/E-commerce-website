<?php
require 'db_connect.php';
  require 'ext.php';
  require 'nav.php';
?>
<html>

  
<head>
    <title>login</title>
</head>
<style>

  input[type=text] {
    width: 45%;
    padding:5px;
    margin: 8px 0;
    border: 3px solid #ccc;
    border-radius: 10px;
    outline: none;

}

 input[type=password] {
    width: 45%;
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






.contanier{
  border:1px solid;
  height: 250px;
  width:30%;
  height:60%;
  margin: 25px 50px 275px 450px;
  border-radius: 10px;

}

span{
margin-left: 50px;

}
input[type=submit] {
     border-radius: 10px;
     padding: 10px;
     outline:none;
}



.header1{
    margin-top:25px 50px 275px 450px;
    text-align: center;
    border-bottom:none;
    padding:20px;
    background-color: darkmagenta;
    border-radius: 10px;
}
    
        body{
        background-image:url(pho/wood.jpg);
        background-attachment: local;
         background-repeat: no-repeat;
        background-position: center;
    }

</style>
<body>


<form action="<?php echo $current_file; ?>" method="post">
  <div class="contanier">

  <div class="header1">
    <h2>LogIn</h2>
  </div>
    <?php  
  
  

if(isset($_POST['username'])&&isset($_POST['password'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  if(!empty($username)&&!empty($password)){
   $result =mysqli_query($conn,"SELECT *  FROM register WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
   $query_rows= mysqli_num_rows($result);

   if($query_rows==0){
    echo "Invalid username or password";
     
   }
   elseif ($query_rows==1){
     $row= mysqli_fetch_row($result);
     $_SESSION['user_id']=$row[0]; 
      echo "Logged in"; 
     header('Refresh:1; URL=home1.php'); 
    }
 }
}
?>

  
    
     <br>Username:
    <input type="text" name="username" value=""required >
    <br><br>
    Password:
    <input type="password" name="password" value="" required>
    <br><br>
    <input type="submit" value="Submit">
   <span>Not Registered?<a href ="register.php">Register</a></span> 
  
  </div>
</form>

</body>
</html>
