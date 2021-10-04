<?php
require 'db_connect.php';

$current_file =$_SERVER['SCRIPT_NAME'];
ob_start();
session_start();

function loggedin(){
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
    return true;
}
else{
    return false;
}
}

function getfield($field){

   
    $query=mysqli_query($conn, "SELECT username FROM register where id='".$_SESSION['user_id']."'");
    while($row=mysqli_fetch_array($query)){
        return $row[1];
    


}
}




?>