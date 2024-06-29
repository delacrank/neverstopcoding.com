<?php
    session_start();
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
    
<h1>Registration Page</h1>
    
<h2>Register</h2>
    
<p>New users can register here to create an account.  Please be sure to fill in all the fields, username, password, email, etc.
    
    <span class = "nl">Registration with this site will allow users to comment on articles and participate in dicussions.</span></p>

<form class = "form-register" method="post" action="register.php">
    <fieldset>
        <legend>Register</legend>
    <p>
        <label>Email address:</label>
        <input type="text" name="email" size="30" maxlength="100"/>
    </p>
    <p>
        <label>Username <br />(max 16 chars):</label>
        <input type="text" name="username" size="16" maxlength="16"/>
    </p>
    <p>
        <label>Password <br />(6 - 16 chars):</label>
        <input type="password" name="passwd" size="16" maxlength="16"/>
    </p>
    <p>
        <label>Confirm password:</label>
        <input type="password" name="passwd2" size="16" maxlength="16"/>
    </p>
    <input type="submit" value ="Register">
    </fieldset>
</form>

    <p>Back to <a href="Login.html">Login</a> page.</p>
    
    <hr />
    <br />    
    <a href="../index.html">To Main Page</a>
    <br /><br />  

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>