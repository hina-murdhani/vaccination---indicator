<?php

$conn = mysqli_connect("localhost","root","","vaccination");
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * FROM `register` WHERE Email_id='$email' and Password='$pwd';";

	$result=mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);
	if($row==1)
	{
		session_start();
		$_SESSION['email']=$email;
		header('Location:home.php');

	
	}
	else
	{
		echo "Invalid Password/Username";
	}
}

?>