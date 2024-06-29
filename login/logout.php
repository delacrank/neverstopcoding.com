<?php
    session_start();
    include('functions.php');
    $title = '';
    $heading = '';
?>

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Registration <?php echo $title ?></title>
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
    
<h1>Log Out Page</h1>
    
<h2>Log Out <?php echo $heading ?></h2>
    
<?php    
    
    $old_user = isset($_SESSION['valid_user']) ? $_SESSION['valid_user'] : '';

    // store  to test if they *were* logged in
    unset($_SESSION['valid_user']);
    $result_dest = session_destroy();

    if (!empty($old_user)) {
        if ($result_dest)  {
        // if they were logged in and are now logged out
            $title = 'Success';
            $heading = 'Successful';
            echo '<p>Logged out.</p>';
            echo '<p>Click here to login in <a href="Login.html">here</a>.</p>';
        } else {
            // they were logged in and could not be logged out
            echo '<p>Could not log you out.</p>';
            $title = 'Failed';
            $heading = 'Failure';
        }
    } else {
  // if they weren't logged in but came to this page somehow
        echo '<p>You were not logged in, and so could not be logged out.</p>';
        echo '<p>Login in <a href="Login.html">here</a>.</p>';
    }
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