<?php


$conn = mysqli_connect("localhost","root","","vaccination");
if(!$conn)
{
    die("error".mysqli_connect_error());
}


if(isset($_POST['submit'])){
    
    $name = $_POST['Name'];
    $phone=$_POST['Phone_no'];
     $city=$_POST['City'];
    $email=$_POST['Email_id'];
     $pwd=$_POST['Password'];
    $no_of_child=$_POST['No_of_child'];
    $loginas=$_POST['Login_as'];
    $sql = "INSERT INTO `register`(`Name`, `Phone_no`, `City`, `Email_id`, `Password`, `No_of_child`, `Login_as`,`ch_rec`) VALUES('$name','$phone','$city','$email','$pwd','$no_of_child','$loginas','$no_of_child')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('Location:l.html');
    }
    else{
        echo "fail";
    }

}




?>

<html>

<head>
  <title>Register Page</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<style>
.navbar
{
    margin-bottom:10px;
}
</style>

</head>
<body>
  
    <nav class="navbar navbar-inverse navbar-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <marquee scrollamount="auto" behavior="alternate" direction="left"><font color="white"><font size="+3">VACCINATION INDICATOR</font></font></marquee>
   
  </div>
</nav>




	<div class="container">
            <form  method="post" class="form-horizontal" role="form"style="margin-top:10px" action="">
                <h2 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sigup Form</h2><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="Name" class="form-control" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="Contact no." class="col-sm-3 control-label">Contact no.</label>
                    <div class="col-sm-6">
                       <input type="text" maxlength="10"  pattern="[0-9]{10}"  class="form-control" name="Phone_no"

     required>
                    </div>
                </div>
                

  
                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-6">
                        <input type="text" name="City" class="form-control" reqired> 
                         </div>
                     </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="Email_id" class="form-control" reqired>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="no.of child" class="col-sm-3 control-label">no. of child</label>
                    <div class="col-sm-6">
                    	<input type="number" name="No_of_child" class="form-control" min="0" max="10" reqired="true"> 
                         </div>
                
                	</div>
                     <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" name="Password" class="form-control" reqired>
                    </div>
                </div>
                

                <div class="form-group">
                    <label class="control-label col-sm-3">Login as</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Login_as" value="parents">Parents
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="Login_as" value="Expert">Expert
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- /.form-group -->
               
                   
                       <!-- <input type="submit"  name="submit" value="value">-->
                        <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                    </div>
                </div>
                   
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>