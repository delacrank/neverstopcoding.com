<?php
    // create short variable names
    $email = filter_input(INPUT_POST, 'email');
    $username = filter_input(INPUT_POST, 'username');
    $passwd = filter_input(INPUT_POST, 'passwd');
    $passwd2 = filter_input(INPUT_POST, 'passwd2');
    // start session which may be needed later
    // start it now because it must go before the headers
    session_start();
    require_once('functions.php');
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

    try {
        // check forms filled in
        if(!filled_out($_POST)) {
            throw new Exception('<p>You have not filled out the form correctly - please go back and try again.</p>');
        }
        // email address not valid
        if(!valid_email($email)) {
            throw new Exception('<p>That is not a valid email address. Please go back and try again.</p>');
        }
        // passwords not the same
        if($passwd != $passwd2) {
            throw new Exception('<p>The passwords you entered do not match - please go back and try again.</p>');
        }
        // check password length is ok
        // ok if username truncates, but passwords 
        // will get munged if they are too long
        if((strlen($passwd) < 6) || (strlen($passwd) > 16)) {
            throw new Exception('<p>Your password must be between 6 and 16 characters. Please go back and try again.</p>');
        }
        // attempt to register
        // this function can also throw an exception
        register($username, $email, $passwd);
        // register session variable
        $_SESSION['valid_user'] = $username;
        // provide link to members page
        echo '<h1>Registration Success</h1>';
        echo '<p>Your registration was successful.</p><br />
        <a href="Login.html">Login here</a>';
    }
    catch (Exception $e) {
        echo '<h1>Registration Failed</h1>
        <p>Error:</p>';
        echo $e->getMessage();
        echo '<hr /><br /><a href="Register.html">Back to Registration form</a><br /><br /></div></div>';
        include('..//Includes//footer.php');
        echo '</body></html>';
        exit;
    }
    ?>
    
    
    <hr />
    <a href = "../index.html">Back Home</a>
<br /><br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>