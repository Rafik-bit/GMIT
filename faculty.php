<?php

$dept=$_POST['dept'];
$ques=$_POST['ques'];
$dat=$_POST['dat'];
$subj=$_POST['subj'];
$assign=$_POST['assign'];

include("connection.php");
$insert="INSERT into faculty SET Department='$dept',
 Subject='$subj', Question='$ques', Assignment='$assign', Submission_date='$dat'";
$con->query($insert);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>

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
<style>

#example2 {
  border: 1px solid;
  width:88%;
  text-align:center;
  padding: 10px;
  box-shadow: 5px 10px 20px blue inset;
}

/*.tb {
  border: 2px solid black;
  border-collapse: collapse;
  padding: 10px;
  width:100%;
}*/

</style> 
<body>

<div class="container">       
        <div class="row">
            <div class="col-md-3">
            <img src="images/gmit_3.png" alt="" height="135px" width="80%">
            </div>
            <div class="col-md-8" style="padding-top: 25px;">
              <img src="images/gmit_2.png" alt="" height="100px" width="100%">
            </div>   
            </div>            
      </div>
    <div class="fluid-cointaier">
        <div class="row">
            <div class="col-md-12">
                <img src="images/line.png" alt="" width="100%">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <img src="images/gmit_1.jpg" alt="" width="100%" height="250px">
            </div>
        </div>
    </div>

    <div class="container">
  <div class="grayBox" style="height:1050px;width: 100%;"><br><br><br> 
         
          <div class="container">          
            <h2 style="padding: 12px;text-align:center;font-size:28px;color:blue;"><a href="teachlogin.html">Dashboard</a></h2>      
          </div><br><br><br>        
          <div class="container">
            <div class="col-sm-4">
               <div id="example2">
                  <p><a href='img/examform.pdf'><i class="fa fa-file-text-o" style="font-size:48px;color:black"></i></a></p>
                  <p>EXAM FORM</p>
                </div>
            </div>
            <div class="col-sm-4">
               <div id="example2">
                  <p><a href='img/semenrol.jpg'><i class="fa fa-file-text-o" style="font-size:48px;color:black"></i></a></p>
                  <p>ENROLMENT</p>
                </div>            
            </div>
            <div class="col-sm-4">
               <div id="example2">
                   <p><a href='img/admit.pdf'><i class="fa fa-file-text-o" style="font-size:48px;color:black;"></i></a></p>
                   <p>ADMIT CARD</p>
                </div>
            </div>
          </div><br>
          <div class="container">
            <div class="col-sm-4">
               <div id="example2">
                  <p><a href='img/result.pdf'><i class="fa fa-file-text-o" style="font-size:48px;color:black"></i></a></p>
                  <p>RESULT</p>
                </div>
            </div>
            <div class="col-sm-4">
               <div id="example2">
                  <p><a href='img/mar.pdf'><i class="fa fa-file-text-o" style="font-size:48px;color:black"></i></a></p>
                  <p>MAR</p>
                </div>            
            </div>
            <div class="col-sm-4">
               <div id="example2">
                   <p><a href='img/mentor.jpg'><i class="fa fa-file-text-o" style="font-size:48px;color:black;"></i></a></p>
                   <p>MENTOR</p>
                </div>
            </div>
          </div>

         <center> <?php
include("connection.php");
$sql="SELECT * FROM faculty";
$result=mysqli_query($con,$sql);
$rcheck=mysqli_num_rows($result);
if($rcheck>0)
  {
      echo "<br>";
      echo "<table><tr><th>Id</th><th>Department</th><th>Subject</th><th>Question</th><th>Assignment</th><th>Submission Date</th></tr>";
      while ($row= mysqli_fetch_assoc($result))
      {
          echo "<tr><td>".$row['id']."</td><td>".$row['Department']."</td><td>".$row['Subject']."</td><td>".$row['Question']."</td><td>".$row['Assignment']."</td><td>".$row['Submission_date']."</td></tr>";
      }
      echo "</table>";
      ?>
    
 <?php } 
 else
 {
     echo "No data found";
  } 

?>
</center>
      
             
  </div>
</div>
<br><br><br><br>
    
    <div class="footer">
    <p>@ 2020 All Rights Reserved Gargi Memorial Institute of Technology,Kolkata, West Bengal</p>
      </div>

</body>
</html>























  
