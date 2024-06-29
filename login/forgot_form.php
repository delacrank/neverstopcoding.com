<?php
    session_start();
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
<?php include('..//Includes//header2.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_index3.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Forgot Password Page</h1>
    
<h2>Forgot Password</h2>
    
    <p>If you forgot your password, simply type in your username into the form below and we will gladly send you a new password. 
    
        <span class = "nl">This form is automated so you should recieve the new password momentarily.</span></p>
    
     <form class = "form-forgot" action="forgot_form_script.php" method="post">
    <fieldset>
         <legend>Forgot Password</legend>
    <p>
        <label>Username:</label>
        <input type="text" name="username" size="16" maxlength="16"/>
    </p>
         <input type="submit" value="change password"/>
    </fieldset>
    </form>  
    
    <p>If you remember your password go back to the  <a href="Login.html">Login</a> page.</p>
    
 <hr />
    <br />    
    <a href="../index.html">To Main Page</a>
    <br /><br />  

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>