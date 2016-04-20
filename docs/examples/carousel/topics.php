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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Maths Topics</title>

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
            <li class="active"><a href="topics.php">Topics</a></li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact us</a></li>
          </ul>
             <form class="navbar-form navbar-right" action="logout.php">
        <button class="btn btn-primary" >Log out</button>
        </form>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
        
        
        <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
            <div class="jumbotron">
            <a href="figuresvideo.php"><h2>2D AND 3D SHAPES</h2></a>
            <p><img class="img-rounded" src="images/shapes.jpeg" alt="Generic placeholder image" width="130" height="130" align="left">What shape is an orange? What shape is a football field? Learn all the different shapes there is with Brody and Pam and have fun with them. Shapes are fun!</p>
          </div>
            <hr>
            <div class="jumbotron">
            <a href="mathvideo2.php"><h2>Addition and Subtraction</h2></a>
            <p><img class="img-rounded" src="images/clock.jpg" alt="Generic placeholder image" width="130" height="130" align="left">Annie and Jose have fun with Addition and Subtraction in their new garden. Addition and subtraction are the most basic things of Mathematics. In this basic math video you will learn all the basics of addition and subtraction</p>
          </div>
            <hr>
            <div class="jumbotron">
            <a href="mathvideo1.php"><h2>MULTIPLICATION</h2></a>
            <p><img class="img-rounded" src="images/multiplication.png" alt="Generic placeholder image" width="130" height="130" align="left">If mummy gives you 2 books everyday, how many books will you have after 5 days? If you eat 5 slices of bread everyday, how many slices would you have eaten in 1 week?  </p>
          </div>
            <hr>
            <div class="jumbotron">
            <a href="mathvideo5.php"><h2>DIVISION</h2></a>
            <p><img class="img-rounded" src="images/division.png" alt="Generic placeholder image" width="130" height="130" align="left">Watch 3 kids share 30 red balls  and 12 yellow balls. How many balls will they get each? How many slices of cake will you get if 10 slices are to be shared by you and 4 other kids?</p>
          </div>
            <hr>
            <div class="jumbotron">
            <a href="mathvideo6.php"><h2>DECIMALS</h2></a>
            <p><img class="img-rounded" src="images/Decimals.jpg" alt="Generic placeholder image" width="130" height="130" align="left">Decimal numbers are 2 or more numbers with a dot in between. How do you read decimal numbers correctly? Lets learn about decimal numbers.</p>
          </div>
            <hr>
            <div class="jumbotron">
            <a href="mathvideo7.php"><h2>FRACTIONS</h2></a>
            <p><img class="img-rounded" src="images/fractions.jpg" alt="Generic placeholder image" width="130" height="130" align="left">Divide an orange into 4 and take 1 portion from the 4, what fraction is that? If you divide a pizza into 6 and you eat 3, what fraction have you eaten?</p>
          </div>
          
         
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
          
            <a href="profile-page.php" class="list-group-item">Your profile</a>
            <a href="gallery.php" class="list-group-item">Photo Gallery</a>
            <a href="accomplishments.php" class="list-group-item">Accomplishments</a>
            <a href="relevantlinks.php" class="list-group-item">Relevant Links</a>
            <a href="http://barclayscodeplayground.co.uk/" class="list-group-item" target="_blank">Programming for kids</a>
            </br> </br>
            <div class="col-xs-14 col-sm-13 sidebar-offcanvas" id="sidebar">
              <div class="list-group-item">
              <h3 style="color: #3399ff;">NEWS FEED</H3>
                <p style="color: black;"> We have released a new geometry course! </br> </br>   20.03.2016</p>
                  <a href="blog.html"> Click for more</a>
                </br></br></br>
                  <p style="color: black;"> We have released a new advanced algorithm course! </br> </br>   20.03.2016</p>
                    <a href="blog.html"> Click for more</a>
              </div>
          </div><!--/.sidebar-offcanvas-->
              
            
          </div>
        </div><!--/.sidebar-offcanvas-->
        </div><!--/row-->
        
        
        <hr>

       <!-- FOOTER -->
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

    </div><!--/.container-->


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
    }
    ?>
