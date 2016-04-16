<?php
require_once("connection.php");
session_start();
$_SESSION['coupon'] = "";

$arr = array();

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	$arr['result'] = "Error";
	$arr['msg'] = "<font color='red'>Error while processing data</font>";
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
	$arr['fees'] = $fees;
	$_SESSION['fees'] = $fees;
	$arr['msg'] = "<font color='red'>Coupon Code is not valid or expired</font>";
	echo json_encode($arr);
	exit;
}

$checkFilingQry="SELECT financialYear FROM formdetails where recordId = ".$_SESSION['recordId'];
$filingResult = mysqli_query($con,$checkFilingQry);
$filingData = mysqli_fetch_array($filingResult);
$financialYear = $filingData['financialYear'];

$row = mysqli_fetch_array($result);
$rate = $row['rate'];
$appliedFor = $row['appliedFor'];

if(($financialYear == "2015-16") || ($financialYear == "2014-15" && $appliedFor == "Two"))
{
	$discount = ($fees*$rate)/100;
	$revisedFees = $fees - $discount;

	$_SESSION['fees'] = $revisedFees;
	$_SESSION['coupon'] = $q;

	$arr['result'] = "Success";
	$arr['msg'] = "<font color='green'>Coupon Code is applied</font>";
	$arr['rate'] = $rate;
	$arr['fees'] = $revisedFees;
	echo json_encode($arr);
	exit;
}
else
{
	$arr['result'] = "Error";
	$arr['fees'] = $fees;
	$_SESSION['fees'] = $fees;
	$arr['msg'] = "<font color='red'>Coupon Code is not valid or expired</font>";
	echo json_encode($arr);
	exit;	
}
?>
</body>
</html>