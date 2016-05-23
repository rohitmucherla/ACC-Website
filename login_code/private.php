<?php

 include 'nav-bar.php';
 
 //check user logged in
 if (empty($_SESSION['user'])) {
   //redirect to login
   header("Location: ../index.php");

   // Remember that this die statement is absolutely critical.  Without it,
   // people can view your members-only content without logging in.
   die("Redirecting to homepage");
 }
// Everything below this point in the file is secured by the login system
// We can display the user's username to them by reading it from the session array.  Remember that because
// a username is user submitted content we must use htmlentities on it before displaying it to the user.
 ?>
 <!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/main_v2.css">
<head>
	<meta charset="UTF-8">
	<title>Management Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body >
  <div class="container">
    <?php echo $nav_bar; ?>

    <script src="js/jquery-2.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hamburger.js"></script>
  </div>
</body >
  </html>
