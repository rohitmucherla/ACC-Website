<?php
 // First we execute our common code to connection to the database and start the session
 require("common.php");

 //remove user data from session
 unset($_SESSION['user']);

 //redirect to home-page
 header("Location: ../index.php");
 die("Redirecting to: Homepage");

 ?>
