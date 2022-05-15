<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

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
            <h2 style="padding: 12px;font-size:35px;color:blue;"><a href="stdregistn.html">Dashboard</a></h2>
            <?php 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$fathernm=$_POST['fathernm'];
$mothernm=$_POST['mothernm'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$confrmpas=$_POST['confrmpas'];
$relg=$_POST['relg'];
$gen=$_POST['gen'];
$bthday=$_POST['bthday'];
$mobile=$_POST['mobile'];
$marks=$_POST['marks'];
$rank=$_POST['rank'];



include("connection.php");

if($pass==$confrmpas)
{
    $select="Select * from student_details where Email_id='$email' or Mobile_no='$mobile' ";
    $select1=($con->query($select));

    $row=mysqli_num_rows($select1);
    if ($row>0)
    {
        echo("<h2>You are already registered in our University</h2>");
    }
else{
   $insert="INSERT into student_details SET First_name='$fname', Last_name='$lname', 
   Father_name='$fathernm', Mother_name='$mothernm', Address='$address', Marks_last_exam='$marks', 
   Rank_WBJEE_MAIN='$rank', Email_id='$email', Password='$pass', 
   Mobile_No='$mobile', Religion='$relg', Gender='$gen', Birthday='$bthday' ";
   $con->query($insert);
   echo("<center><h2>Thanks for register</h2></center>");
     }
}

else
{
    echo("<h2>Password not match </h2><br>");
    echo("<h2>Please go to <a href='stdregistn.html'>Student Registration</a></h2>");
}

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




