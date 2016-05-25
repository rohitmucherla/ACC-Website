<?php
//execute common code to connect to db and start session
require("../login_code/common.php");
$nav_bar='
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Aggie Coding Club</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse navbar-right">
    <ul class = "nav navbar-nav">
      <li class = "active nav-item"><a href="../index.php">Home</a></li>
      <li class = "nav-item"><a href="../about.php">About</a></li>
      <li class = "nav-item"><a href="../resources.php">Resources</a></li>
      <li class = "nav-item"><a href="../projects.php">Projects</a></li>
      <li class = "nav-item"><a href="../contact.php">Contact</a></li>';

  if (!empty($_SESSION['user'])) {
    $nav_bar .='
    <li class = "nav-item">
      <div class="btn-group open">
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Management Tools<span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
        <!--allowed for all users because im sanitizing input and only accesses one database-->
        <a href="project_submission.php">Submit Project</a><br />
      ';

     //<!--allowed for less users because they can edit project information and are expected to know not to break things-->
     if ( ($_SESSION['user']['user_type']=="Administrator") || ($_SESSION['user']['user_type']=="Operator") ){
        $nav_bar .= "<a href='update_home.php'>Update Info</a><br />";
     }

     //<!--allowed only for site Administrators because they can edit user information which is big security flaw.-->
     if ($_SESSION['user']['user_type']=="Administrator"){
      $nav_bar .=  "<a href='edit_users.php'>Edit Users</a><br />";
     }
    $nav_bar .=  '
        </ul>
      </div>
    </li>

    <li class = "nav-item">
      <div class="btn-group open">
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Loggged in:';
       $nav_bar .=  htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8').' <span class="caret"></span>';
       $nav_bar .=  '
        </button>
        <ul class="dropdown-menu">
          <li class = "nav-item"><a href="../login_code/edit_account.php">Preferences</a></li>
          <li class = "nav-item"><a href="../login_code/logout.php">Logout</a></li>
        </ul>
      </div>
    </li>
    ';
  }
  else {
    $nav_bar.= '
    <li class = "nav-item">
      <a href="login_code/login.php">
        <button type="button" class="btn btn-primary btn-lg">Login</button>
      </a>
    </li>
';
}
$nav_bar .='
</div>
</nav>'
?>
