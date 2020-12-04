<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbpwd = "";
$dbName = "test";

$con = mysqli_connect($dbServerName,$dbUserName,$dbpwd,$dbName);

if(mysqli_connect_errno()){
	echo mysqli_connect_error();
}

if(isset($_POST['submit'])){
	
	$Name = $_POST['Name'];
	$Pass = $_POST['Pass'];

	$sql = "INSERT INTO student (Name,Pass)VALUES('$Name','$Pass');";
	$result = mysqli_query($con,$sql);
	if($result){
		echo "success";
	}
	else{
		echo "fail";
	}
}
?>

<html>
	<head>
		<title>demo</title>
	</head>
	<body>
		<input type="text" name="Name"/>
		<input type="text" name="Pass"/> 
		<input type="submit" name="submit"/> 
	</body>
</html>
