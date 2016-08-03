<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Apply</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   <h3>It works...</h3>
    <div class="container">
   <div id="wrapper">

   <div class="page-header">
      <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#500000;">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               
               <a style="color:#ffffff;" class="navbar-brand" href="index.php">Aggie Coding Club</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse navbar-right">
               <ul class="nav navbar-nav">
                  <li class="nav-item"><a style="color:#ffffff;" href="index.php">Home</a></li>
                  <li class = "nav-item"><a style="color:#ffffff;" href="about.html">About</a></li>
                  <li class = "nav-item"><a style="color:#ffffff;" href="resources.html">Resources</a></li>
                  <li class = "nav-item"><a style="color:#ffffff;" href="projects.html">Projects</a></li>
                  <li class = "active nav-item"><a style="color:#ffffff; background-color:#b3b3b3" href="#">Apply</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </div>

<div class="main">
   <div class="jumbotron">
      <h2>Apply</h2>
      <p id="Intro-para">Fill out the interest form below. An officer will contact you with more information about joining the club shortly after.</p>

   <!-- <h3 id="Interest-Form-Header">Interest Form</h3>
   <form class="form-horizontal" role="form" action="contact.php" method="post">

   <div class="form-group">
      <label class="control-label col-sm-2" for="FirstName">First: </label>
      <div class="col-sm-10">
         <input class="form-control" name="FirstName" type="text" placeholder="John" required>
      </div>
   </div>

<div class="form-group">
<label class="control-label col-sm-2" for="LastName">Last: </label>
<div class="col-sm-10">
<input class="form-control" name="LastName" type="text" placeholder="Doe" required>
</div>
</div>

<div class="form-group">

<label class="control-label col-sm-2" for="Email">Email: </label>
<div class="col-sm-10">
<input name="Email" class="form-control" id="email" type="email" placeholder="ACC@gigem.com" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="Phone">Phone: </label>
<div class="col-sm-10">
<input class="form-control" name="Phone" type="tel" placeholder="999-999-9999">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="Classification">Class: </label>
<div class="col-sm-10">
<select class="form-control" name="Classification">
<option value=""></option>
<option value="Freshman">Freshman</option>
<option value="Sophomore">Sophomore</option>
<option value="Junior">Junior</option>
<option value="Senior">Senior</option>
<option value="Grad Student">Grad Student</option>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label" for="MessageOfText">Message</label>
<div class="col-sm-10">
<textarea class="form-control" name="MessageOfText" id="MessageOfText" cols="30" rows="5" placeholder="Why do you want to join the club? If you have any specific interests in coding, please list them"></textarea>
</div>
</div>

<div class="form-group">
<input type="submit" name="submit" class="form-control btn btn-default">
</div>
</form>
</div>
</div>

<footer class="well" style="text-align:center;">
<div>
<div>
You can also email us directly at: <a href="mailto:aggiecodingclub@gmail.com" style="text-decoration:none; color:black;">aggiecodingclub@gmail.com</a>
</div>
&copy; Aggie Coding Club | Page Designed By:
<a href="https://steerzac.github.io" style="text-decoration:none; color:black;" target="_blank">Zac Steer</a>
</div>
</footer>
</div>

</div>

<script src="js/jquery-2.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hamburger.js"></script>

</body>

</html> -->

<?php
include 'nav-bar.php'
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Aggie Coding Club</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main_v2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    </style>
</head>
<body background="Images/academic_plaza.jpeg">
  <div class="container">

    <?php echo $nav_bar; ?>

    <script src="js/jquery-2.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hamburger.js"></script>
<br><br>
    <!--<p>Updates will go here once I figure out an API to pull them from somewhere...</p>-->


<div id="fb-root">
</div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="Images/Logo.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <h3>Logo</h3>
              <p>We need some images...</p>
            </div>
          </div>

          <div class="item">
            <img src="Images/RevEmoji.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <h3>Revielle</h3>
              <p>The Fightin' Texas Aggie Mascot!</p>
            </div>
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>

    <div class="Events">
        <h1 id="">UPCOMING EVENTS</h1>
        <iframe src="https://calendar.google.com/calendar/embed?src=tamu.edu_al94hsf8m75asgi192bm2kqnfo%40group.calendar.google.com&ctz=America/Chicago"
                style="border: 0" width="400" height="400" frameborder="0"
                scrolling="no"></iframe>
    </div>




    <div class="footer">
        &copy; ACC <br>
        <p class="social-links">
            Stay Connected with Aggie Coding Club
            <br>
            <!--<a href="https://twitter.com/ACC" target="_blank">
                <img src="http://www.hdicon.com/wp-content/uploads/2011/07/twitter_icon_2011.png"
                     alt="icon" title="twitter icon" width="60" height="60"
                     border="1px"/>
            </a>-->
            <a href="https://www.facebook.com/aggiecodingclub" target="_blank">
                <img src="http://2yu5yy2vwpsr4dg1ys3jha9o.wpengine.netdna-cdn.com/wp-content/uploads/2015/07/fb-square.png"
                     alt="icon" title="fb icon" width="40" height="40"
                     border="1px"/>
            </a>
        </p>

    </div>

  </div>

</body>
</html>

