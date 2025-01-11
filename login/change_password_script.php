<?php
    session_start();
    include('functions.php');
?>

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Registration Page</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header2.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_index3.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<?php

  // create short variable names
   $old_passwd = isset($_POST['old_passwd']) ? $_POST['old_passwd'] : '';
    $new_passwd = isset($_POST['new_passwd']) ? $_POST['new_passwd'] : '';
    $new_passwd2 = isset($_POST['new_passwd2']) ? $_POST['new_passwd2'] : '';

    echo '<h1>Change Password Page</h1>';
    
  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('<p>You have not filled out the form completely. Please try again.</p>');
    }

    if ($new_passwd != $new_passwd2) {
       throw new Exception('<p>Passwords entered were not the same.  Not changed.</p>');
    }

    if ((strlen($new_passwd) > 16) || (strlen($new_passwd) < 6)) {
       throw new Exception('<p>New password must be between 6 and 16 characters.  Try again.</p>');
    }

        // attempt update
      change_password($_SESSION['valid_user'], $old_passwd, $new_passwd);
  }
  catch (Exception $e) {
    echo $e->getMessage();
    echo '<p>Back to <a href="change_password.html">password change</a> form .</p></div></div>';
    include('..//Includes//footer.php');
    echo '</body></html>';  
    exit;
  }
    echo '<p>Your password has been successfully changed.</p>';
    echo '<p>Back to <a href="Login.html">Login</a>.</p>';
?>
    
<hr />
    <br />    
    <a href="../index.html">To Main Page</a>
    <br /><br />  
    
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>