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

    <title>Relevant Links</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="home-page.html"><img src="images/mc.png" alt="Math corner logo" style="width:180px;height:50px;"> </a>
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
        
        
        <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h2 style="text-align:center">Other e-learning websites to check out</h2>
            <p> Have you finished all your topics? If you have then take a look at these websites below to learn some more!<br/><br/></p>
          </div>
            <hr>
            <div class="jumbotron">
            <a href="http://www.e-learningforkids.org/math/"><h2>E-learning for kids</h2></a>
            <p><img class="img-rounded" src="images/efk_icon_math_179x180.png" href="http://www.e-learningforkids.org/math/" alt="E-learning for kids" width="130" height="130" align="left">The complete Mathworld Curriculum consists of 336 e-lessons in English based on the International baccalaureate standards and 25 Math e-lessons on specific topics.</p>
          </div>
            <hr>
            <div class="jumbotron">
            <a href="http://www.learninggamesforkids.com/math_games.html"><h2>Math Learning Games</h2></a>
            <p><img class="img-rounded" src="images/LGFK_Logo2.jpg" href="http://www.learninggamesforkids.com/math_games.html" alt="Learning games for kids" width="130" height="130" align="left">Mastering math facts is important for students as they learn more arithmetic. For instance, a math student who hesitates on math facts will not be able to perform triple-digit math additions or subtraction effectively. Instantaneous recall of math facts are also a requirement for long multiplication and division. These free math facts games should give your students a fun way to practice their math facts. These online math facts activities should be more fun, effective, and "green" than printed math fact worksheets.</p>
          </div>
          <hr>
            <div class="jumbotron">
            <a href="http://www.educationcity.com/"><h2>Education City</h2></a>
            <p><img class="img-rounded" src="images/numbers.jpg" href="http://www.educationcity.com/" alt="Education City" width="130" height="130" align="left">EducationCity is transforming teaching and learning, helping to improve childrens education. They provide fun educational games in the form of online activities for children and interactive whiteboard resources for teachers</p>
          </div>
           <hr>
            <div class="jumbotron">
            <a href="http://mathszone.co.uk/"><h2>MathsZone</h2></a>
            <p><img class="img-rounded" src="images/image.gif" href="http://mathszone.co.uk/" alt="MathsZone" width="130" height="130" align="left">Problemsolving, shapes, measuring and counting! Lots of activities over at MathsZone!<br/><br/></p>
          </div>
     
          
         
        </div><!--/.col-xs-12.col-sm-9-->

    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
          
            <a href="profile-page.php" class="list-group-item">Your profile</a>
            <a href="gallery.php" class="list-group-item">Photo Gallery</a>
            <a href="accomplishments.php" class="list-group-item">Accomplishments</a>
            <a href="relevantlinks.html" class="list-group-item active">Relevant Links</a>
            <a href="http://barclayscodeplayground.co.uk/" class="list-group-item" target="_blank">Programming for kids</a>
        </div>
            
            
              <div class="list-group-item">
              <h3 style="color: #3399ff;">NEWS FEED</h3>
                <p style="color: black;"> We have released a new geometry topic! </br> </br>   20.03.2016</p>
                  <a href="blog.html"> Click for more</a>
                </br></br></br>
                  <p style="color: black;"> We have released a new advanced Numbers topic! </br> </br>   20.03.2016</p>
                    <a href="blog.html"> Click for more</a>
        </div>
          </div><!--/.sidebar-offcanvas-->
            </div>
        
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

