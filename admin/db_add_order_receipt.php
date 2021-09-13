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
                $date = date("Y-m-d");
                $time = date("H:i:s");
    
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

fieldset{
  width: 800px;
  margin-left: -150px;
}

form{
    padding: 5px;
}

h2{
  text-align: center;
  text-decoration: none;
  margin-left: -13%;
  background-color: darkgrey;
}
}
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
<br><br><br>
<h3></h3>

<fieldset>
              <!--  (Recipt Code)  -->
        <?php
                            
                if(isset($_POST['submit']))
                {
          $user_id = $_POST['customer'];
          $dateo = $_POST['dateo'];
          $datep = $_POST['datep'];
          $timep = $_POST['timep'];
          $pstatus="processing";
          
          $row = $_POST['bil'];
          
                    $oid = "oid";
                    $pid = "pid";
                    $pname = "pname";
                    $pcat = "pcat";
                    $quantity = "quantity"; 
                    $pprice = "productPrice";
          
                    //$order_id = 1;
          //echo $order_id;
          //echo  $pid;
                    //$o_1 = mysql_query("SELECT * FROM order_tab");
                    //$number_of_rows = mysql_num_rows($o_1);
          
          $sql= "SELECT * FROM orders";
          $query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error());
          $rows = mysqli_num_rows($query);
          //$r= mysqli_fetch_assoc($query);
             
                    if($rows!=0)
                        {
                            $order_id = $rows + 1;
                        }
                                
                    echo "<form id='recipt' name='recipt' method='post' action=''>
                      <table width=\"680\" border=\"0\" align=\"center\">
                        <tr>
                          <td colspan=\"5\" align=\"center\"><b>RECEIPT</b></td>
                        </tr>
            <tr>
                          <td colspan=\"5\" align=\"center\">Cookies Date Management System</td>
                        </tr>
                        <tr>
                          <td colspan=\"5\" align=\"center\">Made Just For You</td>
                        </tr>
                        <tr>
                          <td colspan=\"5\"></td>
                        </tr>
                        <tr>
                          <td colspan=\"5\"></td>
                        </tr>
                        <tr>
                          <td>Transaction</td>
                          <td colspan=\"4\">: ".$order_id."</td>
                        </tr>
                        <tr>
                          <td>Order</td>
                          <td colspan=\"4\">: Date &nbsp;".$date."&nbsp;&nbsp;Time &nbsp;".$time."</td>
                        </tr>
            <tr>
                          <td>Pickup</td>
                          <td colspan=\"4\">: Date &nbsp;".$datep."&nbsp;&nbsp;Time &nbsp;".$timep."</td>
                        </tr>
            <tr>
                          <td>User ID</td>
                          <td colspan=\"4\">: ".$user_id."</td>
                        </tr>
                        <tr>
                          <td colspan=\"5\"><hr /></td>
                        </tr>
                        <tr>
                          <td width=\"45\">Code</td>
                          <td width=\"1000\">Name</td>
                          <td width=\"45\">Price/Unit</td>
                          <td width=\"45\">Quantity</td>
                          <td width=\"45\">Total</td>
                        </tr>";
                        
                        $itemCount = 0;
                        $totalPrice = 0;
                     
                        for($a=0;$a<$row;$a++)
                        {
                            $strpid = $_POST[''.$pid.$a.''];
                            $strQuantity = $_POST[$quantity.$a];  
                            $strPrice = $_POST[$pprice.$a]; 

              $sqlf= "SELECT * FROM cookies WHERE product_id = '$strpid'";
              $queryf = mysqli_query($dbconn, $sqlf) or die ("Error: " . mysqli_error());
              $rowf = mysqli_num_rows($queryf);
              $rf= mysqli_fetch_assoc($queryf);
          
              $sPid = $rf['product_id'];
              
                            //buat pengiraan utk total setiap line dan quantity
                            if($strQuantity > 0)
                            {
                                $sqlordersdetail = "INSERT INTO orders_detail (orders_id, product_id, quant) 
                           VALUES('".$order_id."', '".$sPid."', '".$strQuantity."')";
                                mysqli_query($dbconn,$sqlordersdetail  ) or die ("Error: " . mysqli_error());
                                $strTotal = ($strPrice * intval($strQuantity));
                                
                                echo "<tr>
                                  <td>".$sPid."</td>
                                  <td>".$rf['product_name']."</td>
                                  <td>".$strPrice."</td>
                                  <td>".$strQuantity."</td>
                                  <td>".$strTotal."</td>
                                </tr>";
                                $itemCount = $itemCount + intval($strQuantity);
                                $totalPrice = $totalPrice + (intval($strQuantity) * $strPrice);
                            }
                        }
                        
                        $sqlorders = "INSERT INTO orders (orders_id, user_id, orders_date, orders_pickup_date, orders_pickup_time, status) VALUES('".$order_id."','".$user_id."', '".$date."', '".$datep."', '".$timep."', '".$pstatus."')";
                        mysqli_query($dbconn,$sqlorders ) or die ("Error: " . mysqli_error());
                
                        echo"
                        <tr>
                          <td colspan=\"5\"><hr /></td>
                        </tr>
                        <tr>
                          <td colspan=\"4\">Item Count</td>
                          <td colspan=\"1\" align=\"right\">".$itemCount."</td>
                        </tr>
                        <tr>
                          <td colspan=\"4\">Grand Total</td>
                          <td colspan=\"1\" align=\"right\">".$totalPrice."</td>
                        </tr>
                            <tr>
                          <td colspan=\"5\"><hr /></td>
                        </tr>
                        <tr>
                          <td colspan=\"5\"><hr /></td>
                        </tr>
                        <tr>
                          <td colspan=\"5\" align=\"center\">Thank You</td>
                        </tr>
                        <tr>
                          <td colspan=\"5\" align=\"center\">Plese Come Again</td>
                        </tr>
                      </table>
                    </form>";
                }
      ?>
    </fieldset> 
</div>
</body>
</html>