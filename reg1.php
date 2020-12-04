<?php


$conn = mysqli_connect("localhost","root","","vaccination");
if(!$conn)
{
    die("error".mysqli_connect_error());
}
else
{
    echo "suuccess";
}

if(isset($_POST['submit'])){
    
    $name = $_POST['Name'];
    $phone=$_POST['Phone_no'];
     $city=$_POST['City'];
    $email=$_POST['Email_id'];
     $pwd=$_POST['Password'];
    $no_of_child=$_POST['No_of_child'];
    $loginas=$_POST['Login_as'];
   

    $sql = "INSERT INTO `register`(`Name`, `Phone_no`, `City`, `Email_id`, `Password`, `No_of_child`, `Login_as`) VALUES('$name','$phone','$city','$email','$pwd','$no_of_child','$loginas')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "inserted";

    }

    else{
        echo "fail";
    }

}




?>
