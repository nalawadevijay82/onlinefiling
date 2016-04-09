<?php
require_once("../connection.php");
//print_r($_REQUEST);
session_start();
//print_r($_SESSION);

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	echo "<script>window.location='../personalInformation.php';</script>";
}
?>

<script>

function autoPop(){
	document.getElementById("orderId").value= "ZPLive" + String(new Date().getTime());	//	Autopopulating orderId
	var today = new Date();
	var dateString = String(today.getFullYear()).concat("-").concat(String(today.getMonth()+1)).concat("-").concat(String(today.getDate()));
	//document.getElementById("txnDate").value= dateString;
};

function submitForm(){
			var form = document.forms[0];
			form.action = "posttozaakpay.php";
			form.submit();
			}
</script>
<body onload="autoPop();">

<div class="center">
<div class="ecssing">

<?php
$query = "SELECT * FROM `personalinformation` where id = ".$_SESSION['recordId'];
$res = mysqli_query($con,$query);
$data=mysqli_fetch_array($res,MYSQLI_ASSOC);
$firstName = $data['FirstName'];
$lastName = $data['LastName'];
$fatherName = $data['FatherName'];
$email = $data['Email'];
$mobile = $data['Mobile'];

$query = "SELECT * FROM `addressdetails` where recordId = ".$_SESSION['recordId'];
$res = mysqli_query($con,$query);
$data=mysqli_fetch_array($res,MYSQLI_ASSOC);
$address = $data['permAdd'];
$city = $data['permCity'];
$state = $data['permState'];
$pincode = $data['permPincode'];
?>
						
<form action="posttozaakpay.php" method="post">
<h2>Pay Now to see how Zaakpay will work on your website.</h2>
<p>Note: This page behaves like a shopping cart or checkout page on a website.</p>
<table width="650px;">
<tr>
	<td colspan="2" align="center" valign="middle"></td>
	
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Merchant Identifier</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="merchantIdentifier" value="803ddf0baef24e419476c709ad83294c" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Order Id</td>
	<td width="50%" align="center" valign="middle"><input type="text" id="orderId" name="orderId" value="<?=$_SESSION['recordId']?>" /></td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">return url(Optional)</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="returnUrl" value="http://localhost/onlinefiling/payment.php"/></td>
</tr>
<!-- Not Mandatory <input type="hidden" name="returnUrl" /> -->

<tr>	
	<td width="50%" align="right" valign="middle">Buyer Email</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerEmail" value="<?=$email?>"  /> </td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Buyer First Name</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerFirstName" value="<?=$firstName?>" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Last Name</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerLastName" value="<?=$lastName?>" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Address</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerAddress" value="<?=$address?>" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer City</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerCity" value="<?=$city?>" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Buyer State</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerState" value="<?=$state?>" /></td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Country</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerCountry" value="India" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Pincode</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerPincode" value="<?=$pincode?>" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Phone No</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerPhoneNumber" value="<?=$mobile?>" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Txntype</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="txnType" value="1" /></td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Zppayoption</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="zpPayOption" value="1" /></td>
</tr>
<!-- Keep it 1 for production-->
<tr>
	<td width="50%" align="right" valign="middle">Mode</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="mode" value="0" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Currency</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="currency" value="INR" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Amount In Paisa</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="amount" value="<?=$_SESSION['fees']*100?>" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">IPaddress</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="merchantIpAddress" value="127.0.0.1" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Purpose</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="purpose" value="1" /></td>
</tr>

<tr>	
	<td width="50%" align="right" valign="middle">Product Description</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="productDescription" value="Zaakpay subscription fee" /> </td>
</tr>

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product1 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product1Description" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product2 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product2Description" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product3 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product3Description" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product4 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product4Description" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Address</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToAddress" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To City</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToCity" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To State</td>
	<td width="50%" align="center" valign="middle"></td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToState" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Ship To Country</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToCountry" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Pincode</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToPincode" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Phone Number</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToPhoneNumber" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Firstname</td>
	<td width="50%" align="center" valign="middle"></td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToFirstname" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Lastname</td>
	<td width="50%" align="center" valign="middle"></td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToLastname" /> -->

<tr>
	<td width="50%" align="right" valign="middle">Transaction Date "YYYY-MM-DD"</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="txnDate" id="txnDate" value="<?=date("Y-m-d")?>" /></td>
</tr>
<tr>
	<td colspan="2" width="100%" align="center" valign="middle">
		<div style="cursor:pointer; padding-top: 25px; padding-left: 230px;">
			<a class="boxes" onclick="javascript:submitForm()">Pay Now
			</a>
		</div>
	</td>	
</tr>

</table>

</form>
</div>
</div>

<script>//submitForm();</script>
		
</body>
</html>
