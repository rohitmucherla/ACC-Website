<?php
  include 'nav-bar.php';

  $query = "SELECT P.id,P.P_Owner,P.Email,P.P_Name,P.devs_Assigned,description_table.description,description_table.status FROM Projects AS P LEFT JOIN description_table ON description_table.id=P.id";

  try {
    // These two statements run the query against your database table.
    $stmt = $db->prepare($query);
    $result=$stmt->execute();
  }
  catch(PDOException $ex) {
    // Note: On a production website, you should not output $ex->getMessage().
    // It may provide an attacker with helpful information about your code.
    die("Failed to run query: " );//. $ex->getMessage()
  }
  //put rows into array
  $rows = $stmt->fetchAll();
?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Projects</title>
    <!--<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/projects.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/projects_v2.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main_v2.css">
    <script type="text/javascript" src="JavaScript.js"></script>
    <link rel='icon' href='Images/Logo.png'/>
	</head>
	<body>
    <?php echo $nav_bar; ?>

    <script src="js/jquery-2.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hamburger.js"></script>
    <?php
      if (!empty($_SESSION['user'])) {
        if ( ($_SESSION['user']['user_type']=="Administrator") || ($_SESSION['user']['user_type']=="Operator") ){
          echo '
    <!--we want to put a form here so site admins cans update stuff-->
          ';
        }
      }
    ?>
    <div class="container projects">
      <div class="panel-group" id="accordion">
        <h2>Projects</h2>
      <?php foreach($rows as $row): ?>

        <?php
          // htmlentities is not needed here because $row['id'] is always an integer -->
          $Project_ID   = $row['id'];
          $Project_Name = htmlentities($row['P_Name'], ENT_QUOTES, 'UTF-8');
          $Description  = htmlentities($row['description'], ENT_QUOTES, 'UTF-8');
          $Status       = htmlentities($row['status'], ENT_QUOTES, 'UTF-8');
          echo '
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">'.$Project_Name.'</a>
                  </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                      <p>'.$Description.'</p>
                  </div>
              </div>
          </div>
          ';
        ?>
      <?php endforeach; ?>


	</body>
</html>


<!--
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">ACC Website</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Because the ACC is a project-based coding club, we decided we wanted to build our own website. This project is what became of that initiative. You're viewing it right now!</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Etc.</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>More Projects to come! Feel free to contact us with ideas</p>
                </div>
            </div>
        </div>
    </div>
</div>
-->
