<?php       
           
        if(isset($_POST['button']))
{
    session_start();
    $user=$_POST['user'];
    $password=$_POST['pass'];

    $us="mondalrafik2000@gmail.com";
    $pass="Rafik@786";
    $us1="Rafik Mondal";
    $pass1="713145";
 
    if($user==$us && $password==$pass or $user==$us1 && $password==$pass1)
    {
        
            $_SESSION['Username']=$user; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Login</title>

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

     <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome To</h3>
                <h4 style="color: rgb(206, 233, 55);"><i>GARGI MEMORIAL INSTITUTE OF TECHNOLOGY</i></h4>
                <h3><i>Approved by</i></h3>
                <h4 style="color: rgb(206, 233, 55);"><i>Maulana Abul Kalam Azad University of Technology</i></h4>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" >
                      <center> <a style="font-size: 30px;padding-bottom:45px ;" class="nav-link active"  id="home-tab" data-toggle="tab" 
                        href="#home" role="tab" aria-controls="home" aria-selected="true">Only for Staff & Faculty</a></center>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 style="padding-top:60px ;padding-left:20px;"class="register-heading"><a style="color: red;">User name:
                         <?php echo $_SESSION['Username'];?></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a style="color: red;" href="logout.php"> Logout</a></h3>                          
                    <form action="faculty.php" method="POST">
                            <div class="row register-form">
                                    <div class="col-md-6">                         
                                       <div class="form-group">
                                       <h4>Department:</h4>
                                           <input type="text" name="dept" class="form-control" placeholder="Department*" value="" required/>
                                       </div>
                                       
                                       <div class="form-group">
                                      <h4>Question:</h4>
                                      <input type="file" class="form-control" name="ques" required/>
                                       </div>
                                       <div class="form-group">                                        
                                      <h4>Submission Date:</h4>
                                      <input type="date" class="form-control" name="dat" required/>
                                        </div>

                                    </div>
                               
                                   <div class="col-md-6">
                                       <div class="form-group">
                                       <h4>Subject:</h4>
                                           <input type="text" name="subj"  class="form-control" placeholder="Subject *" value="" required/>
                                       </div>
                                       <div class="form-group">
                                          <h4>Assignment:</h4>
                                      <input type="file" class="form-control" name="assign" required/>
                                       </div>
                                      
                                       <div class="form-group">
                                        <input type="submit" class="btnRegister"  value="Submit" name="insert" />
                                          </div>
                                        <div class="form-group">
                                            <a class="btnRegister" style="text-align: center;" href="teach.html">Previous</a>
                                         </div>
                                           
                                    </div>
                                   </div>
                            </div>
                            
                        </form>  
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>


    
    <div class="footer">
    <p>@ 2020 All Rights Reserved Gargi Memorial Institute of Technology,Kolkata, West Bengal</p>
      </div>

</body>
</html>

<?php    } 
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
            <h2 style="padding: 12px;font-size:35px;color:blue;"><a href="teach.html">Dashboard</a></h2>

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

     



