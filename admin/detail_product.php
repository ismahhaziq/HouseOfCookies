<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
$id = $_GET['id'];    
?>

<!DOCTYPE html>
<html>
<title>SHOP H.O.C</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
 @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";


body {
  font-family: "Lato", sans-serif;
  color: #F9A7B0;
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('../image/aduse - Copy.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #ffffff;
}

.container td{
  padding: 7px;
}

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

  .container{

  </style>

  <div id="container">
  <i id="icon" class="fa fa-caret-down"></i>
</div>

  <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Cookies Date</b><br> Management System<b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home|<i class="fa fa-home"></i></a>

      <div class="dropdown">
        <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">A d m i n  <i class="fa fa-caret-down"></i></a>
         
        </button>
        <div class="dropdown-content">
          <a href="view_admin.php">My Account</a>
          <a href="update_view_admin.php">Update account</a>
        </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn"><a href="" class="w3-bar-item w3-button">C u s t o m e r s <i class="fa fa-caret-down"></i></a>
                  
          </button>
            <div class="dropdown-content">
                <a href="view_user.php">Customers' Details</a>
                <a href="update_view_user.php">Update Customer</a>
                <a href="search_user.php">Search Customer</a>
              </div>
              </div> 
              
         <div class="dropdown">
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">C o o k i e s <i class="fa fa-caret-down"></i></a>
              
            </button>
            <div class="dropdown-content">
              <a href="add_product.php">Add Cookies</a>
              <a href="view_product.php">View Cookies</a>
              <a href="update_view_product.php">Update Cookies</a>
              <a href="search_product.php">Search Cookies</a>
            </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">O r d e r s <i class="fa fa-caret-down"></i></a>
                  
                </button>
                <div class="dropdown-content">
                  <a href="add_order.php">Add Customers' Orders</a>
                  <a href="view_order.php">View Customers' Orders </a>
                  <a href="search_order.php">Search Customers Orders</a>
                </div>
                </div>

            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">R e p o r t <i class="fa fa-caret-down"></i></a>
         
               </button>
                <div class="dropdown-content">
                  <a href="view_report.php">View Report</a>
                </div>
                </div>

                <a href="../login/logout.php" class="w3-bar-item w3-button">Logout|<i class="fa fa-sign-out"></i></a>
    </div>
  </div>
</div>

<br><br><br><br>
<div class="container">

<center><h1><strong>Product Detail</strong></h1></center>
<?php
  $query = "SELECT * FROM cookies WHERE product_id='$id'";
  $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
  $row = mysqli_fetch_array($result);
?>

<fieldset>
<center>
<form name="add_product" method="post" action="db_update_product.php" enctype="multipart/form-data">
    <table width="70%" border="1" align="center">
      <tr>
        <td width="20%">NAME</td>  
        <td width="84%"><?php echo ucwords (strtolower($row['product_name'])); ?></td>   
      </tr>  
      <tr> 
        <td width="20%">DETAILS</td>
     <td><?php echo ucwords (strtolower($row['details'])); ?></td>
    </td>  
      </tr>
       <tr> 
        <td width="20%">QUANTITY</td>
     <td><?php echo ucwords (strtolower($row['qty'])); ?></td>
    </td>  
      </tr>
    <tr>
        <td>STATUS</td>
        <td>
      <?php 
          if ($row['product_status']==1) 
            echo "Available";
          else
            echo "Not Available";
      ?>
      </select>   
    </td>
      </tr>
        <tr>
        <td>CATEGORY</td>
        <td>
      <?php 
          if ($row['product_category']==1) 
            echo "Hari Raya";
          else if ($row['product_category']==2)
            echo "Chinese New Year";
          else echo "Christmas";
      ?>
      </select>
    </td>
      </tr>
      <tr>
        <td>PRICE (RM)</td>
        <td>RM <?php echo $row['price']; ?></td>
      </tr>
    <tr>
        <td>PICTURE</td>
        <td>
        <img src="../image/<?php echo $row['picture'];?>" width="130" height="130">
      </td>
      </tr> 

    
      <tr> 
       <td colspan="2"><input type="button" name="cancel" value="Back " onclick="location.href='view_product.php'" /></td>
      </tr>
    
    </table>
</form>
</center>
</fieldset>
 
</div>
</body>
</html>