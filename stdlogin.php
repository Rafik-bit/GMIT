<?php

include("connection.php");
if(isset($_POST['button']))
{
  session_start();
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  $select_login="select * from student_details where Email_id='$user' and Password='$pass' or Mobile_no='$user' and Password='$pass' ";
  $select1=($con->query($select_login));

  $row=mysqli_num_rows($select1);
  if ($row==1) 
  {
        $_SESSION['Username']=$user; ?>
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
            <div class="col-sm-4">
            <h2 style="padding: 12px;text-align:left;font-size:25px;"><a style="color: red;">User name:
            <?php echo $_SESSION['Username'];?></a></h2>
            </div>
            <div class="col-sm-4">
            <h2 style="padding: 12px;text-align:center;font-size:28px;color:blue;"><a href="stdlogin.html">Dashboard</a></h2>
            </div> 
            <div class="col-sm-4">
            <h2 style="padding: 12px;padding-right:50px;text-align:right;font-size:25px;"><a  style="color: red;" href="logout.php">Logout</a></h2>
            </div>
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

  <?php }
   else 
  { ?>

<!DOCTYPE html>
<html>
<head>
    <title>GMIT WEBSITE</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>   
<body>

<div class="container">       
    <div class="row">
        <div class="col-md-3">
        <img src="img/gmit_3.png" alt="" height="135px" width="60%">
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
            <div class="grayBox" style="height:400px;width: 100%;">
            <h2 style="padding: 12px;font-size:35px;color:blue;"><a href="stdlogin.html">Dashboard</a></h2>

            <?php echo "<h2>In valid user id or Password</h2>"; ?>

            </div>
      </center>
    </div>

    <div class="footer">
        <p>@ 2020 All Rights Reserved Gargi Memorial Institute of Technology,Kolkata, West Bengal</p>
      </div>

</body>
</html>
  
<?php
      
      }
}

?>





