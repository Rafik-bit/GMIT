<!DOCTYPE html>
<html>
<head>
    <title>Result</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
            <div class="grayBox" style="height:400px;width: 100%;">
            <h2 style="padding: 12px;font-size:35px;color:blue;"><a href="result.html">Dashboard</a></h2>


            <?php

$user=$_POST['user'];
$pass=$_POST['pass'];


include("connection.php");

$select_login="select * from student_details where Email_id='$user' and Password='$pass' or Mobile_no='$user' and Password='$pass' ";
$select1=($con->query($select_login));

$row=mysqli_num_rows($select1);
if ($row==1)
{
    //echo("Welcome");

    //if(isset($_POST['submit']))
    
       foreach ($_POST['sem'] as $select)
        {
        echo "<div align='center'><h1>To sea your result please enter below </h1> " .$select;
         }

}
else
{
    echo "<h1>Invalid user id or password<h1>";
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
</html