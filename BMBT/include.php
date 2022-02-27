<?php 
$connec=mysqli_connect("localhost","root","","booking");
//$db=mysqli_select_db($connec,'booking');

if($connec)
{
	echo "--";
}

else{
	echo "Not connected";
}

 ?>