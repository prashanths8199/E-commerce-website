<html>
    <?php
    require 'db_connect.php';
    require 'ext.php';
     $res=mysqli_query($conn,"select distinct p_category from product");
    while($row=mysqli_fetch_array($res)){
     $cat=$row['p_category'];
    }
    ?>
<head>
     <meta charset="utf-8"/>
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    <title>HomeApplicances sale</title>
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

/*.active {
    background-color: #4CAF50;
}
*/


* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  height:400px;
  
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
  background-color:grey;
}

.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
  background-color:grey ;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}




.numbertext {
  color:black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.header {
    padding: 5px;
    text-align: center;
    background-image:url(pho/img%205.jpeg);
    margin-bottom:20px;
    border-radius:10px;
}

.column {
    float: left;
    padding: 10px;
    margin-right: 30px;
    border-radius:10px;
    margin-top: 10px;
    
}


.column.side {
    width: 35%;
    background-color: #f1f1f1;
    padding: 10px;
    height:200%;
}


.column.middle {
    float:left;
    width: 60%;
    background-color: Tomato;
    padding: 10px;
    height:200%;
}

.row:after {
    content: "";
    display: ;
    clear: both;
}

p{
  padding:25px;
}

.active {
    background-color: #4CAF50;
}

.dropdown1{

    margin-right:50px;
}

.dropdown1:hover .drop-con {
    display: block;
    width:auto;
    border-radius: 10px;
}

.log{
    margin:20px;
    border-radius:10px;
    outline:none;
    background-color:;

}

img{
width:780px;
height:300px;
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
          <a href='alogin.php'>Admin</a>
          <a href='Register.php'>User</a>
      </div>
      </li>
  <li><a href="login.php">Login</a></li>
  <li><a href="about.php">About</a></li>
  <li class="dropdown1" style="float:right;">
     <a class="dropbtn">Logout</a>
        <div class="drop-con">
            <?php 
                $query=mysqli_query($conn, "SELECT username FROM register where id='".$_SESSION['user_id']."'");
                while($row=mysqli_fetch_array($query))
                {
                    ?><strong>Username:<?php echo $row['username']?></strong><br><?php
                }
            ?>
            <button class ="log"><a href="logout.php">Logout</a></button>
        </div>
    </li>
</ul>
<div class=row>
<div class ="column side">
<p>Home Appliances are those things which make a house into home. Everything that is needed to make a home comes under the category of home appliances. The things that come under the name of home appliances can be divided into two sub categories. They are </p>
  <li>Kitchen applicance</li><br>
  <li>Electrical applicance</li><br>
  <li>Furniture applicance</li><br>
<p>Home appliance, also called Household Appliance, any of numerous and varied electric, electromechanical, or gas-powered devices introduced mainly in the 20th century to save labour and time in the household. Collectively, their effect on industrial society has been to eliminate the drudgery and drastically reduce the time long associated with housekeeping and homemaking. Home appliances have had little or no effect outside the world’s urban communities, but within these communities they have had a profound, even revolutionary, impact in social and economic terms. These devices have, for example, facilitated the establishment of single-person households; in two-parent families, they have enabled both parents to enter the labour market and have otherwise freed large amounts of time and energy that homemakers formerly devoted to preparing food and to laundering, house cleaning, and general housework. Hence, a further result has been the greatly diminished employment of persons engaged in domestic service. The trend toward using automatic and powered household implements to ease basic housekeeping chores, once established, soon extended into such additional fields as personal hygiene and grooming.</p>

</div>
  <div class="column middle">
<p>Slides</p>
  <div class="slideshow-container">
  <div class="mySlides1">
  <div class="numbertext">1 / 5</div>
    <img src="img2.jpg" > 
  </div>

  <div class="mySlides1">
  <div class="numbertext">2 / 5</div>
    <img src="img5.jpg">
  </div>

  <div class="mySlides1">
  <div class="numbertext">3 / 5</div>
    <img src="img16.jpg">
  </div>

  <div class="mySlides1">
  <div class="numbertext">4 / 5</div>
    <img src="img13.jpg">
  </div>

  <div class="mySlides1">
  <div class="numbertext">5 / 5</div>
    <img src="img8.jpg" >
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<p>Slides</p>
<div class="slideshow-container">
  <div class="mySlides2">
  <div class="numbertext">1 / 5</div>
    <img src="img12.jpg">
  </div>

  <div class="mySlides2">
  <div class="numbertext">2 / 5</div>
    <img src="img9.jpg">
  </div>

  <div class="mySlides2">
  <div class="numbertext">3 / 5</div>
    <img src="img13.jpg">
  </div>

  <div class="mySlides2">
  <div class="numbertext">4 / 5</div>
    <img src="img4.jpg">
  </div>

  <div class="mySlides2">
  <div class="numbertext">5 / 5</div>
    <img src="img16.jpg">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}  
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  
  x[slideIndex[no]-1].style.display = "block"; 
  
  
}
</script>
</div>
</div>
</body>
</html>
