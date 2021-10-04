<?php

require 'db_connect.php';
require 'ext.php';



?>


<html>
<head>
<title>Display</title>
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
    <h2>Display Items</h2>

    <div class="block">
    <?php

    $res=mysqli_query($conn,"SELECT * FROM product");
    ?>

    <table>
    <tr>
        <td>Image</td>
        <td>Name</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>category</td>
        <td>Delete</td>
        <td>Edit</td>
    
    </tr>
    <?php

    while($row=mysqli_fetch_array($res))

    {  
        
        echo "<tr>";
        echo "<td>";?> <img src="<?php echo $row["p_image"];?>" height="100" width="100" ><?php echo "</td>";
        echo "<td>"; echo $row["p_name"];echo "</td>";
        echo "<td>"; echo $row["p_price"];echo  "</td>";
        echo "<td>";echo $row["p_quantity"]; echo  "</td>";
        echo "<td>";echo $row["p_category"];echo "</td>";
        echo "<td>";?><a href="delete.php?id=<?php echo $row["p_id"];?>">Delete</a><?php echo "</td>";
        echo "<td>";?><a href="edit.php?id=<?php echo $row["p_id"];?>">Edit</a><?php echo "</td>";
        echo "</tr>";



    }


