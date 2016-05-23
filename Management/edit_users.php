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
    //put rows into array
    $rows = $stmt->fetchAll();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 		<link rel="stylesheet" href="../css/normalize.css">
 		<link rel="stylesheet" href="../css/bootstrap.min.css">
 		<link rel="stylesheet" href="../css/main_v2.css">

 		<head>
 			<meta charset="UTF-8">
 			<title>Edit Users</title>
 			<meta name="viewport" content="width=device-width, initial-scale=1">

 		</head>
 		<body >
 		  <div class="container">

 		    <?php echo $nav_bar; ?>

 		    <script src="js/jquery-2.2.1.js"></script>
 		    <script src="js/bootstrap.min.js"></script>
 		    <script src="js/hamburger.js"></script>

        <br><br><br>
        <table border="1" class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>E-Mail Address</th>
            </tr>
            <?php foreach($rows as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td> <!-- htmlentities is not needed here because $row['id'] is always an integer -->
                    <td><?php echo htmlentities($row['username'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlentities($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

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
