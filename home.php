<?php
$conn = mysqli_connect("localhost","root","","vaccination");
session_start();
$_SESSION['i']=1;
$email= $_SESSION['email'];

$sql = "SELECT * FROM `register` WHERE Email_id='$email';";
$result =mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
  $nm = $row['Name'];

}
$submit=true;
?>
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
      <li><a href="addch.php?submit=true" name='submit'>Add Child</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact us</a></li>
      <li><a href="#">Help</a></li>
      <li><a href="home.html">Logout</a></li>
    </ul>
  </div>
</nav>




 <div class="table-responsive" style="border: 5px solid black">          
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Child Name</th>
      <th>Birth Date</th>
      <th>BCG</th>
      <th>Hepatitis B1</th>
      <th>OPV 1</th>

      <th>OPV 2/IPV</th>
      <th>DTP 2/DTAP 2</th>
      <th>OPV 4/IPV</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql1 = "SELECT * FROM `register` WHERE Email_id='$email';";
    $result1=mysqli_query($conn,$sql1);
    while($row=mysqli_fetch_array($result1)){
      $id=$row['Reg_id'];
    }

    $sql2 = "SELECT * FROM `child` WHERE Reg_id='$id';";
    $res2=mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_array($res2)){
$d=$row['Birthdate'];
$d0=$d;
$d1= date('Y-m-d', strtotime($d. ' + 42 days'));
$d2= date('Y-m-d', strtotime($d. ' + 70 days'));
$d3= date('Y-m-d', strtotime($d. ' + 84 days'));


      echo '<tr>
          <td>'.$row['Childname'].'</td>
          <td>'.$row['Birthdate'].'</td>
          <td>'.$d0.'</td>
          <td>'.$d0.'</td>
          <td>'.$d0.'</td>
          <td>'.$d1.'</td>
          <td>'.$d2.'</td>
          <td>'.$d3.'</td>
      </tr>';
    }
    ?>
    
</table>

<?php

$sql1 = "SELECT * FROM `register` WHERE Email_id='$email';";
$res1=mysqli_query($conn,$sql1);

while($row=mysqli_fetch_array($res1)){
  $level=$row['ch_rec'];
}


if($level>0){
 
  header('Location:child1.php');
}

?>

</body>
</html>
