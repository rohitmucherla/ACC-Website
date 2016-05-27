<?php

  include '../nav-bar.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';

  //redisplay username if enter incorrect password for user convience
  //empty if user has not submitted the form
  $submitted_username = '';

  //if login form has been submitted
  //run login code
  //else display form
  if (!empty($_POST)) {
    $query="SELECT id,username,user_type,password,salt,email FROM users WHERE username = :username";

    $query_params =array(':username'=>$_POST['username']);

    try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
    } catch (PDOException $e) {

        // Note: On a production website, you should not output $ex->getMessage().
        // It may provide an attacker with helpful information
        die("Failed to run query: ".$e->getMessage());
    }

    //user successfully logged in or not
    //init false
    //if they have entered the right details change statement
    $login_ok = false;

    //retrieve the user data from db if row is false username is not registered
    $row = $stmt->fetch();
    if ($row) {
      //useing password submitted by user and salt from db
      //check if passwords match by hashing the submitted password and comparing it to hashed from db
      $check_password = hash('sha256',$_POST['password'].$row['salt']);
      for($round=0; $round<65536; $round++){
        $check_password = hash('sha256',$check_password.$row['salt']);
      }
      //if ($securimage->check($_POST['captcha_code']) != false) {
        if ($check_password==$row['password']) {
          $login_ok=true;
        }
      //}
    }

    //if user logged in successfully, send them to restricted home-page
    //display failed login message and show login form again
    if ($login_ok) {
      // Here I am preparing to store the $row array into the $_SESSION by
      // removing the salt and password values from it.  Although $_SESSION is
      // stored on the server-side, there is no reason to store sensitive values
      // in it unless you have to.  Thus, it is best practice to remove these
      // sensitive values first.
      unset($row['salt']);
      unset($row['password']);

      // This stores the user's data into the session at the index 'user'.
      // We will check this index on the private members-only page to determine whether
      // or not the user is logged in.  We can also use it to retrieve
      // the user's details.
      $_SESSION['user'] = $row;

      //redirect to home page
      header("Location: ../index.php");
      die("Redirecting to: homepage");
    }
    else {
      //tell the user login failed
      print("Login Failed");

      // Show them their username again so all they have to do is enter a new
      // password.  The use of htmlentities prevents XSS attacks.  You should
      // always use htmlentities on user submitted values before displaying them
      // to any users (including the user that submitted them).  For more information:
      // http://en.wikipedia.org/wiki/XSS_attack
      $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
        <form class="form-signin" action="login.php" method="post" >
          Username:<br />
          <input class="form-control" type="text" name="username" value="<?php echo $submitted_username; ?>" />
          <br /><br />
          Password:<br />
          <input class="form-control" type="password" name="password" value="" />
          <br /><br />
          <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
          <input type="text" name="captcha_code" size="10" maxlength="6" />
           <a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>

          <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login" />
        </form>
        <a href="register.php"><button type="button" name="button">Register</button></a>
    </div>
  </body>
</html>
