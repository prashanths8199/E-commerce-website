<html>
   
<head>
     <meta charset="utf-8"/>
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:Gray;
    border-radius:10px;
}

li {
    float: left;
}

li a ,.dropbtn {
    display: inline-block;
    border-radius: 10px;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
   
}


li a:hover {
    background-color: #ddd;
    border-radius: 10px;
  
    
}


.drop-con {
    display:none;
    position: absolute;
    background-color:gray;
    color: black;
    text-align: center;
    text-decoration: none;
}

.drop-con a {
    color: black;
    display: block;
    text-decoration: none;
    text-align: left;
}

.dropdown:hover .drop-con {
    display: block;
    width:125px;
    border-radius: 10px;
}

.header {
    padding: 5px;
    text-align: center;
    background-image:url(pho/img%205.jpeg);
    margin-bottom:20px;
    border-radius:10px;
}
</style>
</head>

<body>
    <div class="header">
    <h1>Home Applicances Sale</h1></div>

<ul>
  <li><a  href="home1.php">Home</a></li>
  <li class ="dropdown">
      <a class="dropbtn">Applicances</a>
        <div class= "drop-con">
           <a href='applicance.php?p_category=Kitchen'>Kitchen</a>
          <a href='applicance.php?p_category=Electrical'>Electrical</a>
            <a href='applicance.php?p_category=Furniture'>Furniture</a>
      </div>
    </li>
    <li class ="dropdown">
        <a class="dropbtn">Register</a>
            <div class= "drop-con">
              <a href='login.php'>Admin</a>
              <a href='Register.php'>User</a>
          </div>
          </li>
  <li><a href="login.php">Login</a></li>
  <li><a href="about.php">About</a></li>
</ul>