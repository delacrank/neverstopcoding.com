<?php
    session_start();
    include('functions.php');
    // creating short variable name
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
    
     $username = isset($_POST['username']) ? $_POST['username'] : ''; 
    
    try {
        $password = reset_password($username);
        notify_password($username, $password);
    }
    catch (Exception $e) {
        echo '<h1>Recovery Failed</h1>';
        echo '<p>Your password could not be reset - please try again later.</p>';
        echo $e->getMessage();
        echo '<p>Back to recovery page <a href="forgot_form.html">here</a>.</p></div></div>';
        include('..//Includes//footer.php');
        echo '</body></html>'; 
        exit;
    }
    echo '<h1>Recovery Success</h1>';
    echo '<p>Your new password has been email to you</p>';
 ?>
    <p>You have been sent to this page if you forgot your password and wanted to generate a new one.
    
    <span class = "nl">Back to <a href="Login.html">Login</a> page.</span></p>
    
    <hr />
    <br />    
    <a href="../index.html">To Main Page</a>
    <br /><br />  
    
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>