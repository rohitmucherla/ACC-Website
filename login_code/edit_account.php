<?php
  // First we execute our common code to connection to the database and start the session
  require("common.php");
  include 'nav-bar.php';

  if (empty($_SESSION['user'])) {
    //redirect to login
    header("Location: ../index.php");

    // Remember that this die statement is absolutely critical.  Without it,
    // people can view your members-only content without logging in.
    die("Redirecting to homepage");
  }

  //if edit form is submitted
  //account updating code is run
  //else form is displayed

  if (!empty($_POST)) {
    //valid email addresss
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      die("Invalid E-Mail Address");
    }

     // If the user is changing their E-Mail address, we need to make sure that
     // the new value does not conflict with a value that is already in the system.
     // If the user is not changing their E-Mail address this check is not needed
     if ($_POST['email'] != $_SESSION['user']['email']) {
       //define SQL query
       $query = "SELECT 1 FROM users WHERE email = :email";

       $query_params = array(':email' =>$_POST['email'] );

       try {
         $stmt = $db->prepare($query);
         $result=$stmt->execute($query_params);
       } catch (PDOException $e) {
         // Note: On a production website, you should not output $ex->getMessage().
         // It may provide an attacker with helpful information about your code.
         die("Failed to run query: " . $ex->getMessage());
       }

       $row = $stmt->fetch();
       if($row){
         die("This email address is already in use");
       }
     }

     //new password hash it generate a fresh salt for good measure
     if (!empty($_POST['password'])) {
       $salt = dechex(mt_rand(0,2147483647)). dechex(mt_rand(0,2147483647));
       $password = hash('sha256',$_POST['password'].$salt);
       for ($round=0; $round < 65536; $round++) {
         $password= hash('sha256',$password.$salt);
       }
     }
     else {
       //dont update if no password in post
       $password = null;
       $salt = null;
     }

     $query_params = array(
       ':email' => $_POST['email'],
       ':user_id' => $_SESSION['user']['id']
    );

    //we need param values for new password hash and salt
    if ($password !== null) {
      $query_params[':password'] = $password;
      $query_params[':salt'] = $salt;
    }

    //dynamically construct depending on wheter or not the user is changing their password
    $query = "UPDATE users SET email = :email";

    //changing password extend SQL query to include password and salt
    if ($password !== null ) {
      $query .= ", password = :password , salt = :salt";
    }

    //finish update query by specifying to only updating the record with current user_id
    $query .= " WHERE id = :user_id";

    try {
      $stmt = $db->prepare($query);
      $result=$stmt->execute($query_params);
    } catch (PDOException $e) {
      // Note: On a production website, you should not output $ex->getMessage().
      // It may provide an attacker with helpful information
      die("Failed to run query" . $e->getMessage());
    }
    //now that user's email address has changed update $_SESSION array so it is accurate
    $_SESSION['user']['email'] = $_POST['email'];

    // This redirects the user back to the members-only page after they register
    header("Location: private.php");

    // Calling die or exit after performing a redirect using the header function
    // is critical.  The rest of your PHP script will continue to execute and
    // will be sent to the user if you do not die or exit.
    die("Redirecting to private.php");
  }
 ?>
 <!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/main_v2.css">
<head>
 <meta charset="UTF-8">
 <title>Edit Account</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body >
  <div class="container">

    <?php echo $nav_bar; ?>

    <script src="js/jquery-2.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hamburger.js"></script>

    <!--Here I want to send an email to Administrators requesting permission upgrade-->
      <!-- we need to get a list of admins to mail request to...-->
      <br /><br /><br /><br />
      Username: <b><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b>
      <br /><br />
        <form action="my_mail.php" method="post">
            <?php echo htmlentities($_SESSION['user']['user_type'], ENT_QUOTES, 'UTF-8')?><input type="submit" value="Request Higher Permission" />
        </form>

    <form action="edit_account.php" method="post">

        E-Mail Address:<br />
        <input type="text" name="email" value="<?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>" />
        <br /><br />
        Password:<br />
        <input type="password" name="password" value="" /><br />
        <i>(leave blank if you do not want to change your password)</i>
        <br /><br />
        <input type="submit" value="Update Account" />
    </form>


  </div>
</body>
</html>
