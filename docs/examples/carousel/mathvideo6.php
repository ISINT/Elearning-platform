<?php 

session_start();
@$loggedInnUser=$_SESSION["username"];

  if (!$loggedInnUser)
  {
print("<h2>Log in is required to access this page!</h2> <br/>");
  }
  else
  {
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

    <title>Learn Decimals</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <!-- NAVBAR
================================================== -->
    
      <body>
         
      <div class="container">
       <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><strong>Group5ELearn</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right" action="#">
        <button class="btn btn-primary ">Sign up</button>
        </form>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
          </div>
     <!-- NAVBAR SLUTT
  ==================================================  -->
  
     <div class="site-wrapper">
 
       <div class="site-wrapper-inner">
 
         <div class="cover-container">
            <div class="container">
  
            <div class="masthead clearfix">
              <div class="inner">
  <h3 class="masthead-brand">Decimals</h3>
              <iframe width="840" height="630" src="http://www.youtube.com/embed/N0_EsMOn8Bm3IM?autoplay"></iframe><br/>
              <p class="lead">
              <p class="lead">Are you ready to take the test about Decimals, click the button below </p><br/>
              <p class="lead">Have Pen and paper ready! </p><br/>
               <a href="mathtest6.php" class="btn btn-lg btn-success">Take the test</a>
              </p>
            </div>
     <hr>
  
           <!--footer-->
            <div class="mastfoot">
              <div class="inner">
                <p>Created by Frank, Henrik, Veronika, Vegar and Imen - Copyright © 2016</p>
              </div>
            </div>
     </div> <!--container-->
  
         </div>
 
       </div>
  
     </div>
  
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
    }
    ?>