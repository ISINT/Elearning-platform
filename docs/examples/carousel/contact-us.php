<?php 


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contact form</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
      
        
    <!-- Font Awesome core css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="hendelser-registrerStudent.js"></script>
      </head>


    <!-- NAVBAR
================================================== -->
    
      <body>
         
      <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="images/MC_logo.png" alt="Math corner logo" style="width:180px;height:50px;"> </a>
        </div>
          
        <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
           
            <li><a href="about-us.html">About us</a></li>
            <li><a href="contact-us.html">Contact us</a></li>
          </ul>
        
          <form class="navbar-form navbar-right" action="index.html">
        <button class="btn btn-primary" >Sign in</button>
        </form>
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
          
     <!-- NAVBAR SLUTT
================================================== --> 

    <div class="container">
        <div class="jumbotron">
  

            <h2>Contact us here!</h2>
            <p>We reply as fast as we can! </p><br/>

            <!--Bootstrap horizontal FORM start-->
            <form class="form-horizontal" method="post" action="" id="contact-us" name="contact-us">

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name"required onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"/>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email"required onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"/>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOut="musUt()"/>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-8">
                  <textarea rows="5" cols="30" class="form-control" id="message" name="message" required onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"></textarea><br/><br/>
                </div>
              </div>
                
                 <div align="right"> 
                <input type="submit" value="Submit"  id="submitMessage" name="submitMessage" class="btn btn-success" />
               <button type="reset" name="reset" id="reset" class="btn btn-primary" >Reset</button><br/><br/></div>

                </div>

            </form>
            <!--Bootstrap horizontal FORM slutt-->
  
          
        </div>
        
        </div>

<?php

  @$submitMessage=$_POST["submitMessage"];
  if($submitMessage) 
  {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $message=$_POST["message"];

    if (!$name||!$email||!$message)
    {
      print("Please enter your name, email and the message you want to send to us");
    }

    else
    {
      include("db-tilkobling.php");

      $sqlSetning=" INSERT INTO elearningmessage (name,email,username,message) VALUES('$name','$email','$username','$message');";
      mysqli_query($db,$sqlSetning) or die ("Could not write to database");
      print(" The following message is sent: <br/> $message");        
    
    }
  }
?>
    
 <!-- This script scrolls page to end for registration messages to show-->
    
        <script>document.body.scrollTop = document.body.scrollHeight - document.body.clientHeight;
        </script>
       
        
   <!-- FOOTER -->
        <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 IS/INT1000 Group 5 - Created by Frank, Henrik, Veronika, Vegar og Imen. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          <div class="navbar-text pull-right" > 
            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
            
          </div>
      </footer>

    </div>
        <!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
<?php
?>