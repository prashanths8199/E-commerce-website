<?php
 require 'db_connect.php';
 require 'ext.php';
 require 'nav.php';
 

 
 ?>

<html>
<head>
    <title>register</title>
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

 input[type=password] {
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

.header1{
    margin-top:25px 50px 275px 450px;
    text-align: center;
    border-bottom:none;
    padding:20px;
    background-color:salmon;
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

span{
margin-left: 50px;

}

h1{

  text-align: center;
  margin-top: 30px;
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
   <div class ="container">

   <div class="header1">
    <h2>Register</h2>
     </div>
     <?php
     if(!loggedin()){
   
   

    if (isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password1'])) {
    
      $username=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $password1=$_POST['password1'];
      

      if($password!=$password1){
        echo "Password do not match";
      }
        else{
            $result=mysqli_query($conn,"SELECT username FROM register WHERE username='$username'") or die(mysqli_error($conn));
            $query_rows= mysqli_num_rows($result);

            if($query_rows==1){
              echo "Username already exits";
            }
            else{
              $username = mysqli_real_escape_string($conn, $_POST['username']);
              $email = mysqli_real_escape_string($conn, $_POST['email']);
              $password = mysqli_real_escape_string($conn, $_POST['password']);
              
              $query="insert into register values('','$username','$email','$password')";
             
              if($result=mysqli_query($conn,$query)){
                echo "ok";
                echo $username." Successfully Registered";
                header('Location:login.php');
               
              } 
              
            }  
          }
    }
 }

 else if(loggedin()){
   echo "Already registered";
 }?>
     <br>
     <br>
    <table>
      <tr>
      <td>Username:</td>
      <td><input type="text" name="username" value="<?php echo isset($username)? $username:"";?>"required></td>
      </tr>

      <tr>
      <td>Email:</td>
      <td><input type="text" name="email" value="<?php echo isset($email)? $email:"";?>"required></td>
      </tr>

      <tr>
      <td>Password:</td>
      <td><input type="password" name="password" value=""required></td>
      </tr>

      <tr>
    <td>Retype password:</td>
      <td> <input type="password" name="password1" value=""required></td>
      <tr>
    </table>
    <input type="submit" name="submit">
   <span>Already member?<a href ="login.php">Login</a></span> 
   </div>
  
</form>

</body>
</html>
