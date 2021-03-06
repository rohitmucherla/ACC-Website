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
