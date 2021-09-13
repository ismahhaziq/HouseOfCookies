<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
  
?>

<!DOCTYPE html>
<html>
<title>SHOP H.O.C</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    <!-- add jQuery library -->
  <script src="https://www.w3schools.com/lib/w3.js"></script>  
  <link rel="stylesheet" href="../css/cookies.css">
  <body>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,600);
      @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";

.topnav {
  overflow: hidden;
  background-color:lightslategrey;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  font-size: 10px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #f0bf20;
  color: rgb(10, 10, 10);
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

.fa-caret-down{
  transform: rotate(0deg);
  transition: transform 1s linear;
}

.fa-caret-down.open{
  transform: rotate(180deg);
  transition: transform 1s linear;
}

img.op{
  filter: brightness(70%);
}

.text{
  background-color: darkgray;
  opacity: 0.8;  
  color: white;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-size: 70px;
  position: relative;
  margin-top: -350px;
}

.text i{
  position: relative;
  margin-top: -350px;
  margin-left: -20px;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  border: none;
  outline: none;
  color: rgb(14, 13, 13);
  padding:  0 10px ;
  background-color: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1ecec;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: rgb(15, 15, 15);
  font-size: 13px;
  padding: 10px 10px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  color: rgb(14, 13, 13);
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: rgb(14, 14, 14);
}

.previous {
  background-color: #9c5f18;
  color: rgb(253, 246, 246);
}

.next {
  background-color: #9c5f18;
  color: rgb(250, 242, 242);
}

.round {
  border-radius: 50%;
}
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,600);


body{
  font-family: 'Raleway', Arial, sans-serif;
  background-color: #fde0e4;
}

.title{
  text-align: center;
  margin-top: 50px;
  color: #2f261e;
  font-size: 25px;
}


figure.snip{
  position: relative;
  float: left;
  overflow: hidden;   /* clipped content, no scroll */
  margin: 10px 1%;
  width:400px;
  height: auto;
  background: rgb(243, 135, 135);
  color: rgb(12, 11, 11);
  text-align:center;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0,0,0, 0.15);   /* horizontal vertical blur color */
}

figure.snip {           / '*':select all elements */
  transition: all 0.5s ease;  /* smooth zoom on/out */
  box-sizing: border-box;  
}

.image{                       /* left column */
  background-color: #000000;
  width:47%;
  height: auto;
  overflow:hidden;
}
.image img{
  width:100%;
  height: 250px;
  margin-top:57px;
}
figcaption{            
  position:absolute;
  width:55%;
  right:0;
  top:38%;
  -webkit-transform: translateY(-50%); /* move up */
  transform: translateY(-50%);
  padding: 10px 35px;
}
figure.snip h4,
figure.snip p,
figure.snip .price{
  margin: 0 0 8px;                     /* top left bottom */
} 
figure.snip h4{
  position: absolute;                  /* inside left column */
  width:45%;
  color:#ffffff;
  left:0px;
  top:9px;
  text-transform: uppercase;          /* capitalize words */
  font-size: 16px;
  font-weight: 450; 
  letter-spacing: 1px;                /* distance between letters */
  z-index:1;
}
figure.snip p{
  font-size:12px;
  font-weight: 500;
  line-height:1.5em;
  margin-top: 10px;                /* distance between lines */
}
figure.snip .price{
  color:#181616;
  font-size: 16px;
}

figure.snip .add-to-cart{
  text-decoration: none;
  position: absolute;
  color:#fcfcfc;
  bottom:0;
  right:0;
  font-weight: 600;
  line-height: 44px;                 /* bottom */
  font-size: 0.75em;
  text-transform: uppercase;
  width:53%;
  background-color: rgba(0, 0, 0, 0.3);
}

figure.snip img:hover{
  opacity:0.6;
  -webkit-transform: scale(1.3,1.3); /* zoom(x,y) */
  transform: scale(1.3,1.3);
}

figure.snip .add-to-cart:hover{
  background-color: black;
}

figure.snip button{                        
  position:absolute;
  bottom:50px;
  font-size:1em;
  color:white;
  cursor: pointer;
  border-radius: 4px;
  background-color: rgba(0,0,0,0.6);
  border: 2px solid white;
  outline: none;
}
figure.snip button:hover{                        
  background-color: white;
  color:black;
  border: 2px solid black;
}

    </style>
  </body>

<body>
<!-- Navbar (sit on top) -->
<div id="container">
  <i id="icon" class="fa fa-caret-down"></i>
</div>

  <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Cookies Date</b> Management System<b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home|<i class="fa fa-home"></i></a>

      <div class="dropdown">
        <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">U s e r <i class="fa fa-caret-down"></i></a>
         
        </button>
        </button>
            <div class="dropdown-content">
              <a href="viewuser.php">View</a>
            </div>
            </div>


         <div class="dropdown">
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">C o o k i e s <i class="fa fa-caret-down"></i></a>
              
            </button>
            <div class="dropdown-content">
              <a href="viewproduct.php">Hari Raya</a>
              <a href="viewproduct2.php">Chinese New Year</a>
              <a href="viewproduct3.php">Christmas</a>
              <a href="search_product.php">Search Cookies</a>
            </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">O r d e r s <i class="fa fa-caret-down"></i></a>
                  
                </button>
                <div class="dropdown-content">
                  <a href="view_order.php">View</a>
                  <a href="add_order_product.php">Add</a>
                </div>
                </div>    

                <a href="../login/logout.php" class="w3-bar-item w3-button">Logout|<i class="fa fa-sign-out"></i></a>
    </div>
  </div>
</div>
</div>
<br><br>

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">       
  
  <div class="title">
   <center><h1><strong>CHRISTMAS</strong></h1></center>
  </div>
  <?php
    $query = "SELECT * FROM cookies  WHERE product_category = '3' ORDER BY product_name";
    $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
    $numrow = mysqli_num_rows($result);
  ?>

   <?php
    $color="1";
    
    for ($a=0; $a<$numrow; $a++) {
    $row = mysqli_fetch_array($result);
    
    if($color==1){
    ?>

<figure class="snip">                <!-- first -->
  <h4><?php echo ucwords (strtolower($row['product_name'])); ?></h4>
  <div class="image">
    <img class="slide1" src="../image/<?php echo $row['picture'];?>"/>
    </div>
  <figcaption>
    <p><?php echo ucwords (strtolower($row['details'])); ?></p>
    <p><?php echo ucwords (strtolower($row['qty'])); ?></p>
    <div class="price">
     RM<?php echo $row['price']; ?></div>
    </div>
  </figcaption>
  <a class="add-to-cart" href="order_product.php?id=<?php echo $row['product_id'];?>" input type="submit" onclick="return confirm('Add item to order list?');" name="submit" value="Click to Order">Click to Order</a>
</figure>
</div>

<?php 
       $color="2";}
     else {
?>

<figure class="snip">                <!-- first -->
  <h4><?php echo ucwords (strtolower($row['product_name'])); ?></h4>
  <div class="image">
    <img src="../image/<?php echo $row['picture'];?>"/>
    </div>
  <figcaption>
    <p><?php echo ucwords (strtolower($row['details'])); ?></p>
    <p><?php echo ucwords (strtolower($row['qty'])); ?></p>
    <div class="price">
     RM<?php echo $row['price']; ?></div>
    </div>
  </figcaption>
  <a class="add-to-cart" href="order_product.php?id=<?php echo $row['product_id'];?>" input type="submit" onclick="return confirm('Add item to order list?');" name="submit" value="Click to Order">Click to Order</a>
</figure>
</div>

 <?php
      $color="1";
     }
    } 
    if ($numrow==0)
      {
     echo 'No record available.'; 
    }
    ?>

</body>
</html>