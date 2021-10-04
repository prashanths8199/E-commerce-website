<?php

require 'db_connect.php';
require 'ext.php';



?>


<html>
<head>
<title>UserInformation</title>
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
  
  body{
    background-color:slateblue;
}

</style>

<body>
    <h2>User Login Information</h2>

    <div class="block">
    <?php

    $res=mysqli_query($conn,"SELECT * FROM userinfo");
    ?>

    <table>
    <tr>
        <td>Username</td>
        <td>Email</td>
        <td>Date-Time</td>
       
    
    </tr>
    <?php

    while($row=mysqli_fetch_array($res))

    {  
        
        echo "<tr>";
       
        echo "<td>"; echo $row["username"];echo "</td>";
        echo "<td>"; echo $row["email"];echo  "</td>";
        echo "<td>";echo $row["date"]; echo  "</td>";
        
        echo "</tr>";



    }


