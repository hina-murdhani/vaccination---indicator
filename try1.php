<?php
$d= $_POST['date'];
$d1=date("Y-m-d", strtotime($d));
$conn = mysqli_connect("localhost","root","","vaccination");
$sql="INSERT INTO `child` (Birthdate)VALUES('$d1')";
$re=mysqli_query($conn,$sql);	

?>
<form action="" method="POST">
<input type="date" name="date">
<input type="submit" value="submit">
</form>