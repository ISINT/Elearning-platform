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

    <title>Registration</title>

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
            
        <div class="alert alert-warning alert-dismissible" role="alert">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <span class="sr-only">Warning:</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Note!</strong> All fields must be filled.
        </div>
          
              
                
            <h1>Join Our Elearning Platform today!</h1>
            <p align="center">Education is the key to your success. Start learning today! </p><br/>

            <!--Bootstrap horizontal FORM start-->
            <form class="form-horizontal" method="post" action="" id="registerStudent" name="registerStudent">

              <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">First name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name"required onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"/>
                </div>
              </div>
              <div class="form-group">
                <label for="surname" class="col-sm-2 control-label">Surname</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter your surname"required onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"/>
                </div>
              </div>
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Create a username"required onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"/>
                </div>
              </div>
              <div class="form-group">
                <label for="userPassword" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Create a password"required onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"/><br/><br/>
                </div>
              </div>
              
               
                <div align="right"> 
                <input type="submit" value="Sign up" name="submitStudentButton" id="submitStudentButton" class="btn btn-success" />
               <button type="reset" name="reset" id="reset" class="btn btn-primary" >Reset</button></div>

                </div>
            </form>
            <!--Bootstrap horizontal FORM slutt-->
  
  	<?php

	@$submitStudentButton=$_POST["submitStudentButton"];
	if($submitStudentButton) 
	{
		$firstName=$_POST["firstName"];
		$surname=$_POST["surname"];
		$username=$_POST["username"];
		$userPassword=$_POST["userPassword"];

		if (!$firstName||!$surname||!$username||!$userPassword)
		{
			print ("All fields must be filled<br/>");
		}

		else
		{
			include("db-tilkobling.php");

			$sqlSetning="SELECT * FROM elearning WHERE username='$username';";
			$sqlResultat=mysqli_query($db,$sqlSetning) or die ("<center><h3>Not been possible to connect to database, try again</center></h3>");
			$antallRader=mysqli_num_rows($sqlResultat);

			if($antallRader!=0)
			{
				print("<center><h3>The username is already taken, choose another username</center></h3><br/>");
			}

			else
			{	$userPassword=md5($userPassword);
				$sqlSetning=" INSERT INTO elearning (firstName,surname,username,userPassword) VALUES('$firstName','$surname','$username','$userPassword');";
				mysqli_query($db,$sqlSetning) or die ("<center><h3>Not been possible to connect to database now, try again </h3></center>");
				print("<center><h2>You are now registered as $username!</h2></center>");
                print("<a href='index.html'><center><h3>Go to home page to log in. &rarr;</h3></center>");
                		
			}
		}

	}
?>
  	  </div>
        <hr>
        </div>
    
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

