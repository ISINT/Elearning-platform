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

    <title>Fractions</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
      
        
    <!-- Font Awesome core css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="quizaddon.css" rel="stylesheet">

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
          
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
          <h3 class="masthead-brand">Fractions</h3>
          <div class="row">
            <div class="col-sm-4 box1">
             <h3>Fractions</h3>
              <h4>Level 1</h4>
                <h5 class="question text-center"> What is 1<sup>1</sup>&frasl;<sub>2</sub> + 1<sup>1</sup>&frasl;<sub>2</sub></h5>        
                <form class="answears">            
                  <input type="radio" name="q1" value="a" id="q1a" class="answers"><label for="q1a"> 3 1/4</label></br>        
                  <input type="radio" name="q1" value="b" id="q1b" class="answers"><label for="q1b"> 3 1/2</label></br>           
                  <input type="radio" name="q1" value="c" id="q1c" class="answers"><label for="q1c"> 3</label></br>           
                  <input type="radio" name="q1" value="d" id="q1d" class="answers"><label for="q1d"> 2 1/2</label></br>     
                </form> 
              <hr size=1>
                <h5 class="question text-center">What is <sup>1</sup>&frasl;<sub>4</sub> + <sup>3</sup>&frasl;<sub>4</sub> </sub></h5>        

                <form class="answears">            
                  <input type="radio" name="q2" value="a" id="q2a" class="answers"><label for="q2a"><sup>1</sup>&frasl;<sub>4</sub></label></br>           
                  <input type="radio" name="q2" value="b" id="q2b" class="answers"><label for="q2b"><sup>3</sup>&frasl;<sub>4</sub></label></br>            
                  <input type="radio" name="q2" value="c" id="q2c" class="answers"><label for="q2c"><sup>1</sup>&frasl;<sub>1</sub></label></br>           
                  <input type="radio" name="q2" value="d" id="q2d" class="answers"><label for="q2d">1<sup>1</sup>&frasl;<sub>4</sub></label></br>      
                </form>      
              <hr size=1>
                <h5 class="question text-center">What is <sup>0</sup>&frasl;<sub>3</sub> + <sup>2</sup>&frasl;<sub>3</sub></h5>        

                <form class="answers">            
                  <input type="radio" name="q3" value="a" id="q3a" class="answers"><label for="q3a"><sup>3</sup>&frasl;<sub>3</sub></label><br/>            
                  <input type="radio" name="q3" value="b" id="q3b" class="answers"><label for="q3b"><sup>2</sup>&frasl;<sub>3</sub></label><br/>            
                  <input type="radio" name="q3" value="c" id="q3c" class="answers"><label for="q3c"><sup>1</sup>&frasl;<sub>3</sub></label><br/>           
                  <input type="radio" name="q3" value="d" id="q3d" class="answers"><label for="q3d"><sup>4</sup>&frasl;<sub>3</sub></label><br/>       
                </form>  
              <hr size=1>
                <h5 class="question text-center">What is <sup>1</sup>&frasl;<sub>4</sub> + <sup>3</sup>&frasl;<sub>4</sub></h5>        
                
                <form class="answers">           
                  <input type="radio" name="q4" value="a" id="q4a" class="answers"><label for="q4a"><sup>1</sup>&frasl;<sub>4</sub></label><br/>            
                  <input type="radio" name="q4" value="b" id="q4b" class="answers"><label for="q4b"><sup>5</sup>&frasl;<sub>4</sub></label><br/>            
                  <input type="radio" name="q4" value="c" id="q4c" class="answers"><label for="q4c"><sup>3</sup>&frasl;<sub>4</sub></label><br/>            
                  <input type="radio" name="q4" value="d" id="q4d" class="answers"><label for="q4d"><sup>4</sup>&frasl;<sub>4</sub></label><br/>        
                </form>
            </div>
                

          
           <div class="col-sm-4 box2">
           <h3>Fractions</h3>
            <h4>Level 2</h4>
              <h5 class="question text-center">What is 3<sup>1</sup>&frasl;<sub>2</sub> + 2<sup>1</sup>&frasl;<sub>2</sub> </h5>        

              <form class="answers">            
                <input type="radio" name="q5" value="a" id="q5a" class="answers"><label for="q5a">asdf</label><br/>            
                <input type="radio" name="q5" value="b" id="q5b" class="answers"><label for="q5b">9</label><br/>            
                <input type="radio" name="q5" value="c" id="q5c" class="answers"><label for="q5c">11</label><br/>           
                <input type="radio" name="q5" value="d" id="q5d" class="answers"><label for="q5d">10 2/3</label><br/>        
              </form>        
            <hr size=1>
              <h5 class="question text-center">What is 6<sup>0</sup>&frasl;<sub>2</sub> + 2<sup>1</sup>&frasl;<sub>2</sub></sub></h5>        

              <form class="answers">            
                <input type="radio" name="q6" value="a" id="q6a" class="answers"><label for="q6a">8<sup>0</sup>&frasl;<sub>2</sub></label><br/>            
                <input type="radio" name="q6" value="b" id="q6b" class="answers"><label for="q6b">8<sup>1</sup>&frasl;<sub>2</sub></label><br/>            
                <input type="radio" name="q6" value="c" id="q6c" class="answers"><label for="q6c">7<sup>1</sup>&frasl;<sub>2</sub></label><br/>            
                <input type="radio" name="q6" value="d" id="q6d" class="answers"><label for="q6d">8<sup>2</sup>&frasl;<sub>5</sub></label><br/>        
              </form>       
            <hr size=1>
              <h5 class="question text-center">What is 2<sup>5</sup>&frasl;<sub>6</sub> + 2<sup>4</sup>&frasl;<sub>6</sub></h5>        

              <form class="answers">            
                <input type="radio" name="q7" value="a" id="q7a" class="answers"><label for="q7a">4<sup>2</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q7" value="b" id="q7b" class="answers"><label for="q7b">4<sup>3</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q7" value="c" id="q7c" class="answers"><label for="q7c">4<sup>1</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q7" value="d" id="q7d" class="answers"><label for="q7d">4<sup>9</sup>&frasl;<sub>6</sub></label><br/>        
              </form>        
            <hr size=1>
              <h5 class="question text-center">What is <sup>8</sup>&frasl;<sub>6</sub> - <sup>2</sup>&frasl;<sub>6</sub></h5>        

              <form class="answers">            
                <input type="radio" name="q8" value="a" id="q8a" class="answers"><label for="q8a">1<sup>0</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q8" value="b" id="q8b" class="answers"><label for="q8b">1<sup>1</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q8" value="c" id="q8c" class="answers"><label for="q8c">1<sup>2</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q8" value="d" id="q8d" class="answers"><label for="q8d">1<sup>3</sup>&frasl;<sub>6</sub></label><br/>       
              </form>
            </div>
          
       
         <div class="col-sm-4 box3">
        
          <h3>Fractions</h3>
            <h4>Level 3</h4>
              <h5 class="question text-center">What is 3<sup>8</sup>&frasl;<sub>6</sub> - 2<sup>4</sup>&frasl;<sub>6</sub></h5>        

              <form class="answers">            
                <input type="radio" name="q9" value="a" id="q9a" class="answers"><label for="q9a">1<sup>4</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q9" value="b" id="q9b" class="answers"><label for="q9b">1<sup>3</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q9" value="c" id="q9c" class="answers"><label for="q9c">1<sup>2</sup>&frasl;<sub>6</sub></label><br/>            
                <input type="radio" name="q9" value="d" id="q9d" class="answers"><label for="q9d">1<sup>1</sup>&frasl;<sub>6</sub></label><br/>        
              </form>        
            <hr size=1>
              <h5 class="question text-center">What is 2<sup>3</sup>&frasl;<sub>5</sub> - <sup>4</sup>&frasl;<sub>5</sub></h5>        

              <form class="answers">           
                <input type="radio" name="q10" value="a" id="q10a" class="answers"><label for="q10a"><sup>4</sup>&frasl;<sub>5</sub></label></br>           
                <input type="radio" name="q10" value="b" id="q10b" class="answers"><label for="q10b">1<sup>1</sup>&frasl;<sub>5</sub></label></br>           
                <input type="radio" name="q10" value="c" id="q10c" class="answers"><label for="q10c">1<sup>2</sup>&frasl;<sub>5</sub></label></br>           
                <input type="radio" name="q10" value="d" id="q10d" class="answers"><label for="q10d">1<sup>4</sup>&frasl;<sub>5</sub></label></br>        
              </form>        
            <hr size=1>
              <h5 class="question text-center">What is 7<sup>3</sup>&frasl;<sub>5</sub> + 2<sup>2</sup>&frasl;<sub>5</sub></h5>        

              <form class="answers">           
                <input type="radio" name="q11" value="a" id="q11a" class="answers"><label for="q11a">10<sup>0</sup>&frasl;<sub>5</sub></label></br>            
                <input type="radio" name="q11" value="b" id="q11b" class="answers"><label for="q11b">9<sup>4</sup>&frasl;<sub>5</sub></label></br>            
                <input type="radio" name="q11" value="c" id="q11c" class="answers"><label for="q11c">10<sup>1</sup>&frasl;<sub>5</sub></label></br>           
                <input type="radio" name="q11" value="d" id="q11d" class="answers"><label for="q11d">10<sup>2</sup>&frasl;<sub>5</sub></label></br>        
              </form> 
                    
            <hr size=1>
              <h5 class="question text-center">What is 1<sup>8</sup>&frasl;<sub>9</sub> - <sup>1</sup>&frasl;<sub>9</sub></h5>        
            
              <form class="answers">           
                <input type="radio" name="q12" value="a" id="q12a" class="answers"><label for="q12a">1<sup>6</sup>&frasl;<sub>9</sub></label><br/>            
                <input type="radio" name="q12" value="b" id="q12b" class="answers"><label for="q12b">1<sup>5</sup>&frasl;<sub>9</sub></label><br/>            
                <input type="radio" name="q12" value="c" id="q12c" class="answers"><label for="q12c">1<sup>7</sup>&frasl;<sub>9</sub></label><br/>            
                <input type="radio" name="q12" value="d" id="q12d" class="answers"><label for="q12d"><sup>11</sup>&frasl;<sub>9</sub></label><br/>        
              </form>
            </div> 
          </div>  

              

              <div id="results">            
                Show me the answears!       
              </div>
            
              
              </div> 
  

<div id="category1">            
<p>              
<strong>Question was wrong:</strong> The answear to 3*5 is <strong>15</strong>.</p>        
</div>        

<div id="category2">            
<p>              
<strong>Question was wrong:</strong> The answear to 9 * 0 is <strong>9</strong>.</p>        
</div>        

<div id="category3">            
<p>                
<strong>Question was wrong:</strong> The answear to 5 * 5 is <strong>25</strong>.</p>        
</div>        

<div id="category4">            
<p>               
<strong>Question was wrong:</strong> The answear to 7 * 1 is <strong>7</strong>.</p>        
</div>        

<div id="category5">            
<p>                
<strong>Question was wrong:</strong> The answear to 10 * 10 is <strong>100</strong>.</p>        
</div>        

<div id="category6">            
<p>                
<strong>Question was wrong:</strong> The answear to 15 * 2 is <strong>30</strong>.</p>        
</div>        

<div id="category7">            
<p>                
<strong>Question was wrong:</strong> The answear to 64 * 0 is <strong>0</strong>.</p>        
</div>        

<div id="category8">            
<p>               
<strong>Question was wrong:</strong> The answear to 11 * 3 is <strong>33</strong>.</p>        
</div>        

<div id="category9">           
<p>               
<strong>Question was wrong:</strong> The answear to 4*67 is <strong>268</strong>.</p>        
</div>        

<div id="category10">            
<p>                
<strong>Question was wrong:</strong> The answear to 11*14 is <strong>154</strong>.</p>        
</div>        
<div id="category11">            
<p>                
<strong>Question was wrong:</strong> The answear to 50*9 is <strong>450</strong>.</p>        
</div>    
<div id="category12">            
<p>                
<strong>Question was wrong:</strong> The answear to 40*4 is <strong>160</strong>.</p>        
</div>  

<div id="category28">            
<p>                
Alle er korrekte!</p>

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
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="quiz-7.js"></script>


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