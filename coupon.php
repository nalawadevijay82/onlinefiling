<?php
require_once("connection.php");
session_start();

$arr = array();

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	$arr['result'] = "Error";
	$arr['msg'] = "Error while processing data";
	echo json_encode($arr);
	exit;
}
$q = $_GET['q'];
$fees = $_GET['fees'];

$checkCouponQry="SELECT * FROM coupons WHERE active = 1 and couponCode = '".$q."' and '".date("Y-m-d")."' between startDate and endDate AND (rate <> 0 AND rate <> '')";
$result = mysqli_query($con,$checkCouponQry);

$rows = mysqli_num_rows($result);
if($rows==0)
{
	$arr['result'] = "Error";
	$arr['msg'] = "Coupon Code is not valid or expired";
	echo json_encode($arr);
	exit;
}
$row = mysqli_fetch_array($result);
$rate = $row['rate'];

$discount = ($fees*$rate)/100;
$revisedFees = $fees - $discount;

$_SESSION['fees'] = $revisedFees;

$arr['result'] = "Success";
$arr['msg'] = "Coupon Code is applied";
$arr['rate'] = $rate;
$arr['fees'] = $revisedFees;
echo json_encode($arr);
exit;
?>
</body>
</html>