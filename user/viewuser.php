<?php 
// Include database connection settings
include('../include/dbconn.php');

include ("../login/session.php");
session_start();

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
<body>
<style>
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
 
 body {
  font-family: "Lato", sans-serif;
  color: white;
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('../image/aduse - Copy.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #ffffff;
}

.main h1{
  color: white;
  font-size: 40px;
  text-align: center;
}

.main td{
  background-color: #FC6C85;
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
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}
#customers td, #customers th {
  border: 1px solid rgb(114, 110, 110);
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(236, 160, 160);
  color: rgb(27, 27, 27);
}
h1{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 25px;
}
</style>
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
              <a href="Viewproduct.php">Hari Raya</a>
              <a href="Viewproduct2.php">Chinese New Year</a>
              <a href="Viewproduct3.php">Christmas</a>
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


<br><br>
<br><br>
<div class="main">
<center><h1><strong> <?php echo $_SESSION['username'];?> Personal Data</strong></h1></center>

<?php
    $user_name = $_SESSION['username'];
  $query = "SELECT * FROM user where username = '$user_name' ";
  $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
  $numrow = mysqli_num_rows($result);
  
    //$query = "SELECT * FROM user ORDER BY name";
    //$result = mysqli_query($query) or die(mysqli_error());
    //$numrow = mysqli_num_rows($result);
?>

   <tr align="left" bgcolor="#FC6C85">
    <td>
        <div style="overflow-x:auto;">
            <center><table id="customers">
      <tr align="center" bgcolor="#FC6C85">
        <th width="9%">USERNAME</td>
        <th width="26%">NAME</td>       
        <th width="10%">PASSWORD</td>
        <th width="9%">EMAIL</td>
        <th width="20%">ADDRESS</td>
        <th width="15%">CONTACT NUMBER</td>
        <th align="center" colspan="2">ACTIONS</td>
      </tr>


      <?php
    $color="1";
    
    for ($a=0; $a<$numrow; $a++) {
    $row = mysqli_fetch_array($result);
    
    if($color==1){
echo "<tr bgcolor='#FC6C85'>"
    
      ?>
    
        <td>&nbsp;<?php echo ucwords (strtolower($row['username'])); ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row['name'])); ?></td>   
        <td><?php echo ucwords (strtolower($row['password'])); ?></td>
        <td>&nbsp;<?php echo $row['email']; ?></td>
        <td>&nbsp;<?php echo $row['address']; ?></td>
        <td>&nbsp;<?php echo $row['phoneNo']; ?></td>
        <td width="5%"><a class="one" href="update_user.php?site=01_02&user=<?php echo $row['username'];?>">Edit</a></td>
        <td width="5%"><a class="one" href="update_status.php?user=<?php echo $row['username'];?>">Delete</a></td>
      </tr> 
     <?php 
       $color="2";}
     else{
     echo "<tr bgcolor='#FFCC99'>"
    
      ?>
        <td>&nbsp;<?php echo $a+1; ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row['username'])); ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row['name'])); ?></td>   
        <td><?php echo ucwords (strtolower($row['address'])); ?></td>
        <td>&nbsp;<?php echo $row['phoneNo']; ?></td>
        <td>&nbsp;<?php echo $row['level_id']; ?></td>
        <td width="5%"><a class="one" href="update_user.php?site=01_02&user=<?php echo $row['username'];?>">Edit</a></td>
        <td width="5%"><a class="one" href="update_status.php?user=<?php echo $row['username'];?>">Delete</a></td>
      </tr>
     <?php
      $color="1";
     }
    } 
    if ($numrow==0)
      {
     echo '<tr>
            <td colspan="8"><font color="#FF0000">No record avaiable.</font></td>
         </tr>'; 
    }
    ?>
    </table>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
   
   <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>