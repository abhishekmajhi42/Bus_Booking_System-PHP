<?php
include('include.php');

session_start();
$ins="INSERT INTO booking (user,Bus_id,Seats_no,Total_fare,Bank,Payment_method) VALUES ('".$_SESSION['user']."','".$_SESSION['Bus_id']."','".$_SESSION['Seats_no']."','".$_SESSION['Total_fare']."','".$_POST['Bank']."','".$_POST['Payment_method']."')";
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];

//$reqInt = (int)$req;

//$seats = "SELECT seats FROM bus WHERE Id='$id'";

//$getSeats = mysqli_query($connec,$seats);

//echo "$getSeats_toString()";


$upd= "UPDATE bus SET seats=(seats-$req) WHERE Id='$id'";

// insert into booking
// train setas decrease

$insert = mysqli_query($connec,$ins);
$update = mysqli_query($connec,$upd);

if ($insert && $update)
{

	//$_SESSION['user']=$_POST["Username"];
	//$_SESSION['pay'] = 'Payment successful...';
	header('location: generic.php');
}
//echo '<script language="javascript">document.location.href="web_home.php"</script>';
?>