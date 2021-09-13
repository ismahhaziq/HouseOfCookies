<?php 
include('../include/dbconn.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}
$path = '\xampp\htdocs\HouseOfCookies\images/';
$pic = $_FILES["file"]["name"];
$tmplocation = $_FILES["file"]["tmp_name"];

$addrecord = "INSERT INTO cookies (product_name, details, qty, product_status,  product_category, price, picture) 
			  VALUES('$valuearr[0]', '$valuearr[1]', '$valuearr[2]','$valuearr[3]', '$valuearr[4]', '$valuearr[5]','$pic')";
//echo $addrecord;
	  $result = mysqli_query($dbconn, $addrecord) or die ("Error: " . mysqli_error($dbconn));

if ($result) {
?>
<script type="text/javascript">
	window.location = "update_view_product.php"
</script>
?>
<?php } ?>