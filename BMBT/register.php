<?php
include('include.php');

$pass=sha1($_POST["Password"]);

$email = $_POST["Email"];
$sel="SELECT * FROM user where Email = '$email'";

$res=mysqli_query($connec,$sel);
$count = mysqli_num_rows($result);

if($count == 0)
{
	$mail=$_POST["Email"];
if(empty($mail)==false)
{

	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$email = $_POST['Email'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$security = $_POST['Security'];

	$ins="INSERT INTO user (Fname,Lname,Email,Username,Password,Security) VALUES ('$fname','$lname','$email','$username','$password','$security')";

	$query  = mysqli_query($connec,$ins);

	session_start();
	$_SESSION['reg'] = 'Registered succesfully...Login now!!';
	header('location: index4.php');
}
	else
{
	session_start();
	$_SESSION['reg_error'] = 'Invalid email!!';
	header('location: index4.php');
}
	
	
}
else
{
	
	session_start();
	$_SESSION['reg_error'] = 'Email registered already!!';
	header('location: index4.php');
	
//echo '<script language="javascript">document.location.href="web_home.php"</script>';

}
?>