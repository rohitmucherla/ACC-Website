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

 if (!empty($_POST)) {

   $query = "SELECT id FROM Projects WHERE P_Name = :Project_Name";
   $query_params = array(':Project_Name' => $_POST['Project_Name']);
   try {
      // These two statements run the query against your database table.
      $stmt = $db->prepare($query);
      $result=$stmt->execute($query_params);
    }
    catch(PDOException $ex) {
      // Note: On a production website, you should not output $ex->getMessage().
      // It may provide an attacker with helpful information about your code.
      die("Failed to run query: ");// . $ex->getMessage()
    }
    $row = $stmt->fetch();
    //if this project does not exist in db
    if (!$row) {
      $query = "INSERT INTO Projects(P_Owner,Email,P_Name) VALUES(:Project_Owner,:Owner_Email,:Project_Name)";

      $query_params = array(
       ':Project_Owner' => $_POST['Project_Owner'],
       ':Owner_Email' => $_POST['Owner_Email'],
       ':Project_Name' => $_POST['Project_Name'],
       //':Skills' => $_POST['Skills']
      );
      try {
        // These two statements run the query against your database table.
        $stmt = $db->prepare($query);
        $result=$stmt->execute($query_params);
      }
      catch(PDOException $ex) {
        // Note: On a production website, you should not output $ex->getMessage().
        // It may provide an attacker with helpful information about your code.
        die("Failed to run query: " );//. $ex->getMessage()
      }

      $query = "SELECT id FROM Projects WHERE P_Name = :Project_Name";
      $query_params = array(':Project_Name'=>$_POST['Project_Name']);
      try {
        // These two statements run the query against your database table.
        $stmt = $db->prepare($query);
        $result=$stmt->execute($query_params);
      }
      catch(PDOException $ex) {
        // Note: On a production website, you should not output $ex->getMessage().
        // It may provide an attacker with helpful information about your code.
        die("Failed to run query: "); //. $ex->getMessage()
      }
      $row = $stmt->fetch();
      if ($row) {
        //echo $row['id'];
        $query = "INSERT INTO description_table (id,description) VALUES(:id,:Description)";
        $query_params = array(
          ':id'=>$row['id'],
          ':Description'=>$_POST['Description']);

        try {
          // These two statements run the query against your database table.
          $stmt = $db->prepare($query);
          $result=$stmt->execute($query_params);
        }
        catch(PDOException $ex) {
          // Note: On a production website, you should not output $ex->getMessage().
          // It may provide an attacker with helpful information about your code.
          die("Failed to run query: ");// . $ex->getMessage()
          }

      }
      else {
        echo '<div class="alert alert-danger">Sorry there is an existing project by that name.</div>';
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/main_v2.css">

		<head>
			<meta charset="UTF-8">
			<title>Project Submission</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">

		</head>
		<body >
		  <div class="container">

		    <?php echo $nav_bar; ?>

		    <script src="js/jquery-2.2.1.js"></script>
		    <script src="js/bootstrap.min.js"></script>
		    <script src="js/hamburger.js"></script>

		    <div class="jumbotron vertical-center">

		      <form method="post" action="project_submission.php">
		        Project Owner: <input type="text" name="Project_Owner">
		        <br>
						Email: <input type="email" name="Owner_Email">
						<br>
		        Project Name: <input type="text" name="Project_Name">
						<br>
						Description:
						<br>
						<textarea name="Description" rows="8" cols="40"></textarea>
						<br>
						<!--Project Skills(Not Required!):
						<br>

            <input type="checkbox" name="Skill_%s" value="%s"> %s<br>-->
            <input type="submit" value="Submit">
          </form>

        </div>

        <p>
          Example
          <table border="1" class="table table-striped">
  			     <!--table row-->
			       <tr>
        				<!--table heading-->
        				<th>Project Owner</th>
        				<th>Project Name</th>
        				<th>Description</th>
        				<th>Skills Required</th>
	           </tr>
              <!--
		          <tr>
          			table data
          			<td>Alyssa Tyler</td>
          			<td>iKandee</td>
          			<td>Mobile shopping app. Similar interface to Flipboard. WebViews that pull company websites.</td>
          			<td>Android, ios, possible server-side scripting</td>
        			</tr>
              -->
	          </table>
        </p>

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
