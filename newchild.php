<?php

session_start();
$email=$_SESSION['email'];
$conn = mysqli_connect("localhost","root","","vaccination");
if(!$conn)
{
    die("error".mysqli_connect_error());
}

$sql = "SELECT * FROM `register` WHERE Email_id='$email';";
$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);
  $id=$row['Reg_id'];
  $u_child=$row['No_of_child']+1;


if(isset($_POST['submit'])){

    $name = $_POST['Name'];
    $bd=$_POST['birhdate'];
    $bd1=date("Y-m-d", strtotime($bd));
    $gd=$_POST['gender'];
    $sql = "INSERT INTO `child`(`Reg_id`,`Childname`, `Birthdate`, `Gender`) VALUES('$id','$name','$bd1','$gd');";
    $result = mysqli_query($conn,$sql);
    if($result){
        $sql1="Update `register` set No_of_child='$u_child' where Reg_id='$id';";
        $res = mysqli_query($conn,$sql1);
        if($res){
        header('Location:home.php');
    	}
    }
    else{
        echo "fail";
    }

}

?>