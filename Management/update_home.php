<?php
//this file includes the nessecary db information
//it must be included on every webpage that a user can visit
//please insert this next line inside the <div class="container"> inside the <body>
//<?php echo $nav_bar; //? //>
//please ensure to correct its closing by removing the comments infront of ? and >
//it creates the nav-bar
include 'important.php';

//check user logged in
if (empty($_SESSION['user'])) {
  //redirect to login
  header("Location: ../index.php");

  // Remember that this die statement is absolutely critical.  Without it,
  // people can view your members-only content without logging in.
  die("Redirecting to homepage");
}

  // Everything below this point in the file is secured by the login system
  $query = "SELECT id,username,email FROM users";
  try
    {
        // These two statements run the query against your database table.
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    catch(PDOException $ex)
    {
        // Note: On a production website, you should not output $ex->getMessage().
        // It may provide an attacker with helpful information about your code.
        die("Failed to run query: " . $ex->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="en">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/main_v2.css">

		<head>
			<meta charset="UTF-8">
			<title>Aggie Coding Club</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">

		</head>
		<body >
		  <div class="container">

		      <?php echo $nav_bar; ?>

		    <script src="js/jquery-2.2.1.js"></script>
		    <script src="js/bootstrap.min.js"></script>
		    <script src="js/hamburger.js"></script>


		    <div class="jumbotron vertical-center">

          <h2>Goal</h2>
            <p>
              I want to be able to have operators update pages by logging in then entering an "edit" mode
              Where they can edit the text content on page.
              For example on the projects.php page they would be able
              to update the information or give some quick updates
              I want to accomplish this mostly by using mysql
              for our page content when Operators update the content
              we push it back to database and reload page with new content
            </p>
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
