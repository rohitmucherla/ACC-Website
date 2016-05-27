<?php

  //execute common code to connect to the db and start the session
  include '../nav-bar.php';

  //check if reg form has been submitted
  if (!empty($_POST)) {
    //ensure non-empty username
    if (empty($_POST['username'])) {
      //note that dies() is a terrible way of handling user errors
      //much better to display the error and allow the user to correct hteir mistake
      //i will do this once i can visit restricted pages bc it seeems no one on google does it right...
      die("Please enter a username.");
    }

    //non-empty password
    if (empty($_POST['password'])) {
      die("Please enter a password");
    }

    //valid email addresss
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      die("Invalid Email Address");
    }

    $query="SELECT 1 from users WHERE username = :username";
    $query_params = array(':username'=>$_POST['username']);
    try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
    } catch (PDOException $e) {
      //should not output $e->getMessage() on production site
      //gives attackers helpful information about code
      die("Failed to run query: ");//.$e->getMessage()
    }

    //array with next row or false if no rows
    $row = $stmt->fetch();

    //if row was returned we know a matching username
    if($row){
      die("This username is already in use");
    }

    //ensure email addresss is unique
    $query = "SELECT 1 FROM users WHERE email = :email";
    $query_params = array(':email' =>$_POST['email'] );

    try {
      $stmt = $db->prepare($query);
      $result=$stmt->execute($query_params);
    } catch (PDOException $e) {
      //should not output $e->getMessage() on production site
      //gives attackers helpful information about code
      die("Failed to run query: ");//.$e->getMessage()
    }
    //array with next row or false if no rows
    $row = $stmt->fetch();

    //if row was returned we know a matching username
    if($row){
      //should not output $e->getMessage() on production site
      //gives attackers helpful information about code
      die("Failed to run query: ");//.$e->getMessage()
    }

    $query = "INSERT INTO users (username,password,salt,email) VALUES (:username,:password,:salt,:email)";

    //salt randomly generated here to protect againist brute
    //hex representation of 8 byte salt easier for humans to read in hex format
    // For more information:
    // http://en.wikipedia.org/wiki/Salt_%28cryptography%29
    // http://en.wikipedia.org/wiki/Brute-force_attack
    // http://en.wikipedia.org/wiki/Rainbow_table
    $salt = dechex(mt_rand(0,2147483647)) . dechex(mt_rand(0,2147483647));

    //hash the password with the salt so it can be stored securely in the db
    //output of statement is 64 byte hex string represents 32 byte sha256 hash of password
    //original password cannot be recovered from the hash
    //For more information:
    //http://en.wikipedia.org/wiki/Cryptographic_hash_function
    $password = hash('sha256',$_POST['password'].$salt);

    //hash value 65536 more time_sleep_until
    //protect against brute force attacks. Now attacker must compute the hash 65537 times
    //for each guess they make against a password instead of guessing 65537 different guesses in the same
    //amount of time if we only hashed once
    for($round = 0; $round<65536; $round++){
      $password = hash('sha256',$password.$salt);
    }

    //prepare tokens for insertion
    //do not store the org password; only the hashed version of it
    //nor do we store the salt in plaintext; security risk
    $query_params = array(
      ':username' =>$_POST['username'],
      ':password' =>$password,
      ':salt'=>$salt,
      ':email'=>$_POST['email']
   );
    try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
    } catch (PDOException $e) {
      //should not output $e->getMessage() on production site
      //gives attackers helpful information about code
      die("Failed to run query: ");//.$e->getMessage()
    }

    //redirects the user to the login page after register
    header("Location: login.php");

    exit;
  }

 ?>
<h1>Register</h1>
<form action="register.php" method="post">
    Username:<br />
    <input type="text" name="username" value="" />
    <br /><br />
    E-Mail:<br />
    <input type="text" name="email" value="" />
    <br /><br />
    Password:<br />
    <input type="password" name="password" value="" />
    <br /><br />
    <input type="submit" value="Register" />
</form>
