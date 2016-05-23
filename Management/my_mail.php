<?php
//this is code I found to mail something too tired to do it now
//I may need to put this in a mail.php i dont know...
   $to = "dev.jjh@planet-hinchley.com";
   $subject = "This is subject";

   $message = "<b>This is HTML message.</b>";
   $message .= "<h1>This is headline.</h1>";

   $header = "From: NOREPLY@aggiecodingclub.com";
   //$header .= "Cc:afgh@somedomain.com";
   $header .= "MIME-Version: 1.0";
   $header .= "Content-type: text/html";

   $retval = mail ($to,$subject,$message,$header);

   if( $retval == true ) {
     echo '<div class="alert alert-success">"Message sent successfully..."</div>';
     header("Location: edit_account.php");

   }else {
     echo '<div class="alert alert-danger">Sorry there was an error sending your message.</div>';
     header("Location: edit_account.php");

   }

?>
