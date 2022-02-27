<?php

include('include.php');

$username = $_POST["Username"];
$password = $_POST["Password"];
$sel="SELECT * FROM user where Username='$username' and Password='$password'";

$result=mysqli_query($connec,$sel);
$count = mysqli_num_rows($result);

if($count == 0 )
{
	session_start();
	$_SESSION['error'] = 'Invalid username or password';
  	header('Location: index4.php');
	
}

else
{
	
	session_start();
	$_SESSION['user']=$_POST["Username"];
	echo '<script language="javascript">document.location.href="generic.php"</script>';
	
}

?>

