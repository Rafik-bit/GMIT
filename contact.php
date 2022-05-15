<!DOCTYPE html>
<html>
<head>
    <title>GMIT WEBSITE</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

</head>   
<body>

<div class="container">       
        <div class="row">
            <div class="col-md-3">
            <img src="img/gmit_3.png" alt="" height="135px" width="80%">
            </div>
            <div class="col-md-8" style="padding-top: 25px;">
              <img src="img/gmit_2.png" alt="" height="100px" width="100%">
            </div>   
            </div>            
      </div>
    <div class="fluid-cointaier">
        <div class="row">
            <div class="col-md-12">
                <img src="img/line.png" alt="" width="100%">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <img src="img/gmit_1.jpg" alt="" width="100%" height="250px">
            </div>
        </div>
    </div>

    <div class="container">  
            <center> 
            <div class="grayBox" style="height:400px;width:100%;">
            <h2 style="padding: 12px;font-size:35px;color:blue;"><a href="index.html">Dashboard</a></h2> 

<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$stream=$_POST['stream'];
$message=$_POST['message'];

echo "<h2>Thank You</h2>";

include("connection.php");
$insert="INSERT into admin_detl SET Name='$name', Phone='$phone', Email_id='$email', Stream='$stream', Message='$message'";
$con->query($insert);

?>

</div>
</center>
</div>

<br><br><br><br>
    
    <div class="footer">
    <p>@ 2020 All Rights Reserved Gargi Memorial Institute of Technology,Kolkata, West Bengal</p>
      </div>

</body>
</html>
