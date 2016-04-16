<?php
$con=mysqli_connect("onlineitfiling.in","itservice","precision.2008","onlineitfiling");
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}
