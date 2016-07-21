<?php
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="Images/smiley.png">
    <script src="js/script.js"></script>
</head>

<body>
   <div class="container">
    <div id="wrapper">

        <div class="page-header">
            <!--<img style="float:right" src="acc.jpeg" alt="description" title="acc-logo" width="70" height="70" />-->
            <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#500000;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="color:#ffffff;" class="navbar-brand" href="index.html">Aggie Coding Club</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a style="color:#ffffff;" href="index.html">Home</a></li>
            <li class = "nav-item"><a style="color:#ffffff;" href="about.html">About</a></li>
            <li class = "nav-item"><a style="color:#ffffff;" href="resources.html">Resources</a></li>
            <li class = "nav-item"><a style="color:#ffffff;" href="projects.html">Projects</a></li>
            <li class = "active nav-item"><a style="color:#ffffff; background-color:#b3b3b3" href="#">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        </div>

       <?php

   if(isset($_POST["submit"])) {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];


    $FirstNameText = "First Name: " . $FirstName . "\n";
    $LastNameText = "Last Name: " . $LastName . "\n";
    $EmailText = "Email: " . $Email . "\n";


    $Phone = $_POST["Phone"];

    $FirstNameText = "First Name: " . $FirstName . "\n";
    $LastNameText = "Last Name: " . $LastName . "\n";
    $EmailText = "Email: " . $Email . "\n";
    $PhoneText = "Phone: " . $Phone . "\n";


    if(isset($_POST["Classification"])) {
        $Classification = $_POST["Classification"];
        $ClassificationText = "Classification: " . $Classification . "\n";
    }
    if(isset($_POST["MessageOfText"])) {
        $MessageOfText = "Message: " . $_POST["MessageOfText"];
    }

    $sentMail = mail("rohit.mucherla@gmail.com", "ACC Website Interest Form", $FirstNameText. $LastNameText . $EmailText . $ClassificationText . $MessageOfText);
    if($sentMail) {
        echo "Contact form received. Thank you, " . $FirstName;
    } else {
        die("Form did not send");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="Images/smiley.png">
    <script src="js/script.js"></script>
</head>

<body>
    <div id="wrapper">

        <div id="header">
            <!--<img style="float:right" src="acc.jpeg" alt="description" title="acc-logo" width="70" height="70" />-->
            <div id="title_logo">
                <h1>Aggie Coding Club</h1>
            </div>
            <section class="nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="projects.html" title="Projects">Projects</a></li>
                    <li><a href="resources.html" title="Resources">Resources</a></li>
                    <li><a href="about.html" title="Info">About Us</a></li>
                    <li><a href="contact.html" title="Contact">Contact Us</a>
                    </li>
                </ul>
            </section>
        </div>




    if (mail ("steerzac@tamu.edu", "ACC Website Interest Form", $FirstNameText. $LastNameText . $EmailText . $ClassificationText . $PhoneText . $MessageOfText)) {
        echo '<div class="alert alert-success">Thank You! An officer will contact you shortly</div>';
    } else {
        echo '<div class="alert alert-danger">Sorry there was an error sending your message. We are working to fix the problem</div>';
    }
}



?>


        <div class="main">
            <!--            <img src="http://placehold.it/100x100">-->


            <div class="message-form">
                <h2>Contact Us</h2>
                <p id="Intro-para">Help us learn more about you by filling out our interest form! Also be sure to connect with us on social media.</p>
                <div class="social_media_links">
                    <a target="_blank" href="https://www.facebook.com/aggiecodingclub/?fref=ts"><img src="Images/Facebook.png"></a>
                    <!-- <a target="_blank" href="https://twitter.com/steerbait"><img src="Images/Twitter.jpg"></a> -->
                    <!-- <a target="_blank" href="https://www.linkedin.com/company/1418841?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A1418841%2Cidx%3A2-1-4%2CtarId%3A1455263101881%2Ctas%3AGithub"><img src="Images/LinkedIn.jpg"></a> -->

                </div>

                <h3 id="Interest-Form-Header">Interest Form</h3>
                <form id="userForm" action="contact.php" method="post">

                    <p>
                        <label for="FirstName">First: </label>
                        <input name="FirstName" type="text" placeholder="John" required>
                    </p>

                    <p>
                        <label for="LastName">Last: </label>
                        <input name="LastName" type="text" placeholder="Doe" required>
                    </p>

                    <p>
                        <label for="Email">Email: </label>
                        <input name="Email" type="email" placeholder="ACC@gigem.com" required>
                    </p>

                    <p>
                        <label for="Classification">Classification: </label>
                        <select name="Classification">

            <div class="jumbotron">
                <h2>Apply</h2>
                <p id="Intro-para">Fill out the interest form below. An officer will contact you with more information about joining the club shortly after.</p>

                <h3 id="Interest-Form-Header">Interest Form</h3>
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

                    </p>


                    <p>
                        <label for="MessageOfText">Message</label>
                        <textarea name="MessageOfText" id="MessageOfText" form="userForm" cols="30" rows="5" placeholder="Ask anything..."></textarea>
                    </p>

                    <p>
                        <input name="submit" id="submit" type="submit">
                    </p>


                </form>

            </div>


            <p>
             You can also email us directly at: <a href="mailto:aggiecodingclub@gmail.com">aggiecodingclub@gmail.com</a></p>

        </div>

        <footer class="footer">
            &copy; Aggie Coding Club | Page Designed By:
            <a href="https://www.linkedin.com/in/zachary-steer-8b4196103" target="_blank">Zac Steer</a>
        </footer>
    </div>

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

</html>
