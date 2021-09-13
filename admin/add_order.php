<!DOCTYPE html>
<?php 
include('../include/dbconn.php');

include ("../login/session.php");
session_start();

if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
                $sqlUSER= "SELECT * from user";
        $queryUSER = mysqli_query($dbconn, $sqlUSER) or die ("Error: " . mysqli_error());
        $rowUSER = mysqli_num_rows($queryUSER);
        $rUSER= mysqli_fetch_assoc($queryUSER);
        
        date_default_timezone_set("Asia/Kuala_Lumpur");
                $date = date("d/m/Y");
                $time = date("H:i:s");
        

?>

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
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url('../image/aduse - Copy.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #ffffff;
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

.container1{
  font-family: "Lato", sans-serif;
  color: #F9A7B0;
  margin-top: 100px;
  margin-left: 200px;
  margin-right: 200px;
}

  </style>

<script type = "text/javascript">
function calc() 
{
var total = 0;
var rowNo = order.elements["bil"].value;
var qProduct = "quantity";
var pProduct ="productPrice";

for (a=0;a<rowNo;a++)
{
  var textRow = a.toString();
  var textQuantity = qProduct + textRow;
  var textPrice = pProduct + textRow;
  var quantity = parseInt(order.elements[textQuantity].value)
  var pPrice = parseInt(order.elements[textPrice].value);
  total = total + (quantity * pPrice);
}
document.getElementById("price").value = total;
document.getElementById("cash").min = total;
}

</script>
</head>
<body>
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

<div class="container1">
<br>
<h1><center><strong>Add Customers' Order</strong></center></h1>

<fieldset>

<form name="order" method="POST"  action="db_add_order_receipt.php" enctype="multipart/form-data" >
    <table width="100%" border="0" align="center">
      <tr>
        <td width="">Customer Name</td>  
        <td width="">
      <select name="customer" style="min-width:330px;">
        <?php
          while($rUSER= mysqli_fetch_assoc($queryUSER)){
            $cust_name = $rUSER['name'];
            $user_id = $rUSER['user_id'];
            echo"<option value='$user_id'>$cust_name</option>";?>
            
        <?php
          }
        ?>
        
      </select>
      
    </td>  
      </tr>  
      <tr> 
        <td>Order Date</td>
        <td><input type="date" name="dateo" size="50" hidden /><?php echo $date?></td>
      </tr>
    <tr>
        <td>Pickup Date</td>
        <td><input type="date" name="datep" size="50" /></td>
      </tr>
    <tr>
        <td>Pickup Time</td>
        <td><input type="time" name="timep" size="50" /></td>
      </tr>
 
      <?php
        $sql= "SELECT * FROM cookies ORDER BY product_category";
        $query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error());
        $row = mysqli_num_rows($query);
        //$r= mysqli_fetch_assoc($query);
  
        echo "<table border='1' width='100%'  align='center'>";
        echo "<tr>
                <td width='5%'>Code</td>
                <td width='40%'>Product Name</td>
                <td width='20%'>Category</td>
                <td width='5%'>Price(RM)</td>
                <td width='10%'>Quantity</td>
                </tr>";  
            
                $strOid = "oid";
                $strPid = "pid";
                $strPname = "pname";
                $strPcat = "pcat";      
                $strQuantity = "quantity";  
                $strPrice = "productPrice";
                $strTotal = "total";  
                $no=0;  
                
                echo "<input type='text' name='bil' id='bil' value=".$row." hidden>";
                  
                        
                while ($r = mysqli_fetch_assoc($query))   
                { 
          $productName = $r['product_name'];
          $productStatus = $r['product_status'];
          $productCat = $r['product_category'];
          $pid = $r['product_id'];
          $productPrice = $r['price'];
          if($productStatus == 1)
          {
            echo "<tr>
                <td><center><input type='hidden' class='center' name=".$strPid.$no." id=".$strPid.$no." value =".$r['product_id'].">".$r['product_id']."</td>
                <td>".$r['product_name']."</td>
                <td>";
                
                if ($r['product_category']=='1') 
                  echo "Hari Raya";
                else if ($r['product_category']=='2')
                  echo "Chinese New Year";
                                else if ($r['product_category']=='3')
                                     echo "Christmas";
                
                echo "</td>
                
                <td><center><input type='hidden' class='center' name=".$strPrice.$no." id=".$strPrice.$no." value =".$r['price']." readonly'>".$r['price']."</td>
                <td><center><input type='number' name=".$strQuantity.$no." id=".$strQuantity.$no." min='0' max='100' value='0'></td>
                </tr>";
            $no++;
          }
          else
          {
            echo "<tr>
                <td><center><input type='hidden' class='center' name=".$strPid.$no." id=".$strPid.$no." value =".$r['product_id'].">".$r['product_id']."</td>
                <td>".$r['product_name']."</td>
                <td>";
                
                if ($r['product_category']=='1') 
                                    echo "Hari Raya";
                else if ($r['product_category']=='2')
                  echo "Chinese New Year";
                                else if ($r['product_category']=='3')
                                    echo "Christmas";
                
                echo "</td>
                
                <td><center><input type='hidden' class='center' name=".$strPrice.$no." id=".$strPrice.$no." value =".$r['price']." readonly'>".$r['price']."</td>
                <td><center><input type='hidden' name=".$strQuantity.$no." id=".$strQuantity.$no." value='0' >Not Available</td>
                </tr>";
            $no++;
          }
        
                }
                
                echo "<tr>
                <td colspan='2'>&nbsp;</td>
                <td>
                <input type='button' name='calculate' id='calculate' onClick='calc()' value='Calculate'></td>
                <td><input type='text' name='price' id='price' value='0'></td>
                </tr>
                
                <tr>
                <td colspan='2'>&nbsp;</td>
                <td><select class='option' name='pay'>
                <option disabled='disabled' selected='selected'>Payment Type</option>
                <option value='pay'>CASH
                </select></td>
               
                <td><input type='submit' name='submit' onclick='myFunction()' id='print' value='Print'</td>
                      <p id='demo'></p>
                      </tr>
                        <tr>
                        <td align='center' colspan='5'>
                            <input type='reset' name='reset' id='reset' value='   Reset   ' />  
                        </td>
                        </tr>
                    ";
                echo "</table>";
                
               
                ?>
      <center><strong><a href="viewproduct.php">CANCEL ORDER</strong></center>

    
    
    </table>
</form>

</fieldset>
 
</div>
<script>
function myFunction() {
  var txt;
  if (confirm("Do you want to print the receipt?  [Note: Please bring the receipt when you want to pick up your cookies]") == true) {
      txt = " Order accepted! We will notify the admin to start wrapping up your order";
    } else {
      txt = "Print Canceled!";
    }

  document.getElementById("demo").innerHTML = txt;
}
</script>

</body>

</html>
