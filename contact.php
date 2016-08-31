<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="Images/smiley.png">
    <script src="jss/script.js"></script>
</head>

<body>
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
                        
                        <a style="color:#ffffff;" class="navbar-brand" href="index.html">Aggie Coding Club</a>
                    </div>
                    
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a style="color:#ffffff;" href="index.html">Home</a></li>
                            <li class = "nav-item"><a style="color:#ffffff;" href="about.html">About</a></li>
                            <li class = "nav-item"><a style="color:#ffffff;" href="resources.html">Resources</a></li>
                            <li class = "nav-item"><a style="color:#ffffff;" href="projects.html">Projects</a></li>
                            <li class = "active nav-item"><a style="color:#ffffff; background-color:#b3b3b3" href="#">Apply</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

<?php
       if(isset($_POST["submit"])) {
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $Email = $_POST["Email"];
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

        if (mail("rm36735@tamu.edu", "ACC Website Interest Form", $FirstNameText . $LastNameText . $EmailText . $ClassificationText . $PhoneText . $MessageOfText)) {
            echo '<div class="alert alert-success">Thank You! An officer will contact you shortly</div>';
        } else {
            echo '<div class="alert alert-danger">Sorry there was an error sending your message. We are working to fix the problem</div>';
        }
    }
?>

            <div class="main">
                <div class="jumbotron">
                    <h2>Apply</h2>
                    
                    <p id="Intro-para">
                        Fill out the interest form below. An officer will contact you with more information about joining the club shortly after.
                    </p>    

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

