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

    <title>Shapes</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
      
        
    <!-- Font Awesome core css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="quizaddon2.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      </head>
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
         <a class="navbar-brand" href="home-page.html"><img src="images/MC_logo.png" alt="Math corner logo" style="width:180px;height:50px;"> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="topics.php">Topics</a></li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="contactUs.php">Contact us</a></li>
          </ul>
            <form class="navbar-form navbar-right" action="logout.php">
        <button class="btn btn-primary" >Log out</button>
        </form>
            
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
     <!-- NAVBAR SLUTT
================================================== -->         
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
          <h3 class="masthead-brand">Shapes</h3>
          <div class="row">
          <div class="col-sm-4 box1 Biggerboxes">
                     

              <h5 class="question text-center">The figure on the picture is?</h5>
                  <img src="images/geometry-oval.jpg" alt="Image of oval" style="width:150px;height:150px;">
                  
                  

                  <form class="answers">     
                    <input type="radio" name="q25" value="a" id="q25a" style=""><label for="q25a">Circle</label><br/>            
                    <input type="radio" name="q25" value="b" id="q25b" style=""><label for="q25b">Rektangle</label><br/>            
                    <input type="radio" name="q25" value="c" id="q25c" style=""><label for="q25c">Oval</label><br/>       
                  </form> 
</div>
          <div class="col-sm-4 box2 Biggerboxes">
                  <h5 class="question text-center">How many sides does a box have?</h5>
                  <img src="images/geometry-box.jpg" alt="Image of box" style="width:150px;height:150px;">
                  
                       

                  <form class="answers">           
                    <input type="radio" name="q26" value="a" id="q26a"><label for="q26a">6</label><br/>            
                    <input type="radio" name="q26" value="b" id="q26b"><label for="q26b">3</label><br/>            
                    <input type="radio" name="q26" value="c" id="q26c"><label for="q26c">2</label><br/>         
                  </form>   
</div>
          <div class="col-sm-4 box3 Biggerboxes">
                <h5 class="question text-center">How many sides does a circle have?</h5> 
                  <img src="images/geometry-circle.jpg" alt="Image of circle" style="width:150px;height:150px;">
            
                  <form class="answers">           
                    <input type="radio" name="q27" value="a" id="q27a"><label for="q27a">1</label><br/>            
                    <input type="radio" name="q27" value="b" id="q27b"><label for="q27b">2</label><br/>            
                    <input type="radio" name="q27" value="c" id="q27c"><label for="q27c">3</label><br/>  
                  </form>  
                  </div>     
            </div>
         
          </div>  
      </div>

<br/>

<div id="results">            
Show me the answers       
<div id="category25">            
<p>                
<strong>Question was wrong:</strong> The answear to "The figure on the picture is?" <strong>Oval</strong>.</p>        
</div>
<div id="category26">            
<p>                
<strong>Question was wrong:</strong> The answear to "How many sides does a box have?" <strong>6 sides</strong>.</p>        
</div>
<div id="category27">            
<p>                
<strong>Question was wrong:</strong> The answear to "The figure on the picture is?"<strong>1</strong>.</p>        
</div>
<div id="category28">            
<p>                
Alle er korrekte!</p>
<br/>
<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="https://home.hbv.no/11091/eLearn/examples/carousel/accomplishments.php";
            }
         //-->
      </script>
   <p>Click the following button, you will be redirected to home page.</p>
      
      <form>
         <input type="button" value="Redirect Me" onclick="Redirect();" />
      </form>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="quiz-3.js"></script>

</div>

          <div class="mastfoot">
            <div class="inner">
              <p>Created by Frank, Henrik, Veronika, Vegar and Imen - Copyright © 2016</p>
            </div>
          </div>

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