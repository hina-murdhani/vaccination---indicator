

<html>

<head>
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
ul {
    list-style-type: none;
    margin:0;
    padding:0;
    height:35px;
    overflow: hidden;
  
}
li
{
  font-size: 20px;
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li><a href="l.html">Login</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact us</a></li>
      <li><a href="#">Help</a></li>
      <li><a href="home.html">Logout</a></li>
    </ul>
  </div>
</nav>




    <div class="container">
            <form  method="post" class="form-horizontal" role="form"style="margin-top:10px" action="childreg.php">
                <h2 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Child
                 <?php

                 $conn = mysqli_connect("localhost","root","","vaccination");
                if(!$conn)
                {
                    die("error".mysqli_connect_error());
                }
                session_start();
                $email= $_SESSION['email'];

                $sql = "SELECT * FROM `register` WHERE Email_id='$email';";
                $res=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($res)){
                 $i=$row['ch_rec']; 
                }
                echo $i;

                 ?> 
                 Details</h2><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="Name" placeholder="Full Name" class="form-control" required>
                    
                    </div>

                </div>

                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Birth Date</label>
                    <div class="col-sm-6">
                        <input type="date" name="birhdate" class="form-control" required="true" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" placeholder="01/01/1967">
                    
                    </div>

                </div>

            
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="male">Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female">Female
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- /.form-group -->
               
                        <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">
                    </div>
                </div>
           
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>