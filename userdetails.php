<?php

require 'db_connect.php';
require 'ext.php';

?>



 
<html>
<head>
    <title>Details</title>
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
height: 600px;
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
     background-color:steelblue;
  }

</style>
<body>


<form action="#" method="post">
   <div class ="container">

   <div class="header">
    <h2>BillForm</h2>
  </div>
     <?php
     $id=$_SESSION['user_id'];
if(isset($_POST['submit'])){
  if(isset($_POST['firstname'])){
    $query="insert into billform values($id,'$_POST[firstname]','$_POST[lastname]','$_POST[email]',$_POST[phonenumber],'$_POST[city]','$_POST[address]',$_POST[pincode])";
   if(mysqli_query($conn,$query)){
       header('Location:conform.php');
   }
   }
  }?>
     <br>
     <br>
    <table>
      <tr>
      <td>Firstname:</td>
      <td><input type="text" name="firstname" value=""required></td>
      </tr>

      <td>Lastname:</td>
      <td><input type="text" name="lastname" value=""required></td>
      </tr>

      <tr>
      <td>Email:</td>
      <td><input type="text" name="email" value=""required></td>
      </tr>

      <tr>
      <td>Contactnumber:</td>
      <td><input type="text" name="phonenumber" value=""required></td>
      </tr>

      <tr>
      <td>City:</td>
      <td> <input type="text" name="city" value=""required></td>
      <tr>

      <tr>
      <td>Resd-address:</td>
      <td> <input type="text" name="address" value=""required></td>
      <tr>

      <tr>
      <td>Pincode:</td>
      <td> <input type="text" name="pincode" value=""required></td>
      <tr>
    </table>
    <input type="submit" name="submit" value="Save">
   </div>
  
</form>

</body>
</html>

