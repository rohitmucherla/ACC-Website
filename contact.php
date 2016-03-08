<?php
   if(isset($_POST["submit"])) {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
       
    $FirstNameText = "First Name: " . $FirstName . "\n";
    $LastNameText = "Last Name: " . $LastName . "\n";
    $EmailText = "Email: " . $Email . "\n";
       
    if(isset($_POST["Classification"])) {
        $Classification = $_POST["Classification"];
        $ClassificationText = "Classification: " . $Classification . "\n";
    }
    if(isset($_POST["MessageOfText"])) {
        $MessageOfText = "Message: " . $_POST["MessageOfText"];
    }
    $sentMail = mail("steerzac@tamu.edu, aggiecodingclub@gmail.com", "ACC Website Interest Form", $FirstNameText. $LastNameText . $EmailText . $ClassificationText . $MessageOfText);
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
    <title>Apply</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="Images/smiley.png">
    <script src="jss/script.js"></script>
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
                    <li><a href="contact.php" title="Apply">Apply</a>
                    </li>
                </ul>
            </section>
        </div>

       

        <div class="main">
            <!--            <img src="http://placehold.it/100x100">-->

            <div class="message-form">
                <h2>Apply</h2>
                <p id="Intro-para">Fill out the interest form below. An officer will contact you with more information about joining the club shortly after.</p>

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
                    <label for="Phone">Phone: </label>
                    <input name="Phone" type="tel" placeholder="999-999-9999">
                    </p>

                    <p>
                        <label for="Classification">Classification: </label>
                        <select name="Classification">
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
                        <textarea name="MessageOfText" id="MessageOfText" form="userForm" cols="30" rows="5" placeholder="Why do you want to join the club? If you have any specific interests in coding, please list them"></textarea>
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
</body>

</html>