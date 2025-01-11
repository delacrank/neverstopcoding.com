<?php
    session_start();
    include('functions.php');
    if(isset($_SESSION['valid_user'])) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Login Page</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_index3.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Login Page</h1>
    
<h2>Login</h2>
    
    <p>Welcome to my login page, here you can create an account which consists of a username, email and password. If you forget your password we can always email you a new one.
        
    <span class = "nl">Creating an account will allow members to participate in dicussions and interact with other memebers.</span>
    
    <span class = "nl">Not a current user, <a href="Register.html">Register Here</a>.</span></p>
    
    <form class = "form-login" method="post" action ="login_script.php">
    <fieldset>
        <legend>Login</legend>
    <p>
        <label>Username:</label>
        <input type="text" name="username"/>
    </p>
    <p>
        <label>Password:</label>
        <input type="password" name="passwd"/>
    </p>
        <input type="submit" value="Log in"/>
        </fieldset>
    </form>
    
    <p>Click <a href="forgot_form.html">Here</a> if you forgot your password.</p>
    
    <hr />
    <br />    
    <a href="../index.html">To Main Page</a>
    <br /><br />  
    
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>