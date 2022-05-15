<?php

include("connection.php");

if(isset($_POST['button']))
{
    session_start();
    $user=$_POST['user'];
    $password=$_POST['pass'];

    $us="mondalrafik2000@gmail.com";
    $pass="Rafik@786";
 
    if($user==$us && $password==$pass)
    {
        include("connection.php");
        $sql="SELECT * FROM admin_detl";
        $result=mysqli_query($con,$sql);
        $rcheck=mysqli_num_rows($result);
        if($rcheck>0)
        {
            $_SESSION['user']=$us; ?>  
            
            <!DOCTYPE html>
<html>
<head>
    <title>GMIT WEBSITE</title>

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

</head>  
       <style>
               table, tr, th, td
               {
                border: 1px solid black;
                border-collapse: collapse;
                font-size: 20px;
                padding: 5px;
                background-color: rgb(190, 181, 47);
                }

                .navbar-brand {
                padding: 6px;
                margin-top:30px;
                font-size: 25px;
                 }           
               .navbar { 
                background-color: rgb(7, 92, 14);
                padding: 1px;
                text-align:center;
                 }
                .r {
                font-size:50px;
                color: yellow;
                } 

                .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                height: 50px;
                width: 100%;
                background-color: rgb(32, 22, 128);
                color: yellow;
                text-align: center;
                font-size: 30px;
                }

                .cd {
                    text-align:center;
                    color:rgb(184, 7, 7);
                    font-size: 40px;
                }
        </style> 

<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
        <img src="img/logo_1.png"> 
    </div>

    <div class="navbar-header">
        <img src="img/gmit_2.png"> 
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li><a class="navbar-brand" style="color: red;">User name:<?php echo $_SESSION['user'];?></a></li>
      <li><a class="navbar-brand" href="logout.php">Logout</a><li>
    </ul>
  </div>
</nav>

<h3 class="cd"><b><u>Contact Details</u></b></h3>

<?php
      if($_SESSION['user']!=NULL)
      {
       
        include("connection.php");
          $sql="SELECT * FROM admin_detl";
          $result=mysqli_query($con,$sql);
          $rcheck=mysqli_num_rows($result);
          if($rcheck>0)
            {
                echo "<br>";
                echo "<center><table><tr><th>Id</th><th>Name</th><th>Phone</th><th>Email-id</th><th>Stream</th><th>Message</th></tr>";
                while ($row= mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>".$row['id']."</td><td>".$row['Name']."</td><td>".$row['Phone']."</td><td>".$row['Email_id']."</td><td>".$row['Stream']."</td><td>".$row['Message']."</td></tr>";
                }
                echo "</table></center>";
            } 
           else
           {
               echo "No data found";
            } 
        }
    ?>

<div class="footer">
       <div class="row">
         <div class="col-sm-5">
         <p>Gargi Memorial Institute of Technology</p>
         </div>
         <div class="col-sm-2">
         <p>Admin user only</p>
         </div>
         <div class="col-sm-5">
         <p>Gargi Memorial Institute of Technology</p>
         </div>
        </div> 
  </div>

</body>
</html>

    <?php    } 
        else{
              echo "No data found";
            } 
    } 
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
            <h2 style="padding: 12px;font-size:35px;color:blue;"><a href="index.html">Dashboard</a></h2>

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


