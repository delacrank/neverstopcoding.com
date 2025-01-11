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
    $username = filter_input(INPUT_POST, 'username');
    $passwd = filter_input(INPUT_POST, 'passwd');
    
    if(!filled_out($_POST)) {
        echo '<h1>Login Failure</h1><p>You have not filled out the form correctly - please go back and try again.</p>';
        echo '<p>Click here to go <a href="Login.html">back to Login</a>.';
    } else { 
        if($username && $passwd) {
        // they have tried loggin in
            try {
                login($username, $passwd);
                // if they are in the database register the user id
                $_SESSION['valid_user'] = $username;
                echo '<h1>Login Success</h1>';
            }
            catch (Exception $e) {
                // unseccessful login
                echo '<h1>Login Failure</h1>';
                echo $e->getMessage();
                echo '<p>You could not be logged in.
                  You must be logged in to view this page.
                <span class = "nl">Click <a href="Login.html">here</a> to   
                login.</p>';
                exit;
            }
        }
        check_valid_user();
        echo '<p>If you forgot your password
            <a href="forgot_form.html">click here</a>.
            <span class = "nl">Or click here to <a href="change_password.html">
            change password</a>.</span>    
            <span class = "nl">Click <a href="logout.php">here</a> to logout.
            </span> </p>';
       
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