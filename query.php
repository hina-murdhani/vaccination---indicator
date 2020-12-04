<?php
$conn = mysqli_connect("localhost","root","","vaccination");
if(!$conn)
{
    die("error".mysqli_connect_error());
}
if(isset($_POST['submit'])){
    
   
    $email=$_POST['Email'];
    $subject=$_POST['subject'];
    $query=$_POST['query'];
    $sql = "INSERT INTO `query`(`Email`, `subject`, `query`) VALUES('$email','$subject','$query')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('Location:home.html');
    }
    else{
        echo "fail";
    }

}
?>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      
</nav>


<div class="row" style="margin-top:50px">
    <div class="col-xs-8 col-lg-offset-2">
		<form role="form">
			<fieldset>
				<h2>Ask Your Query</h2>
				<hr class="colorgraph">
				
					<div class="form-group">
						<input type="text" class="form-control" name="Email" placeholder="Email" required>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control"  name="subject" placeholder="Subject" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" name="query" placeholder="Message" maxlength="140" rows="7"></textarea>
                        
                    </div>   
					
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
					</div>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
</body>
</html>