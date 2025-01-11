<?php
    include('functions.php');
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
    
<h1>Change Password Page</h1>
    
<h2>Change Password</h2>
    
<?php
    check_valid_user();
?>
    
    <p>If you want to change your password, simply type your old password into the form.  Then you can type in your new password followed confirming it.</p>
    
     <form class = "form-forgot" action="change_password_script.php" method="post">
    <fieldset>
         <legend>Change Password</legend>
    <p>
        <label>Old Password:</label>
        <input type="password" name="old_passwd" size="16" maxlength="16"/>
    </p>
    <p>
       <label>New Password:</label> 
        <input type="password" name="new_passwd" size="16" maxlength="16"/> 
    </p>
    <p>
        <label>Confirm new Password:</label>
        <input type="password" name="new_passwd2" size="16" maxlength="16"/> 
    </p>
        <input type="submit" value="Change password"/>
    </fieldset>
    </form>  
    
 <hr />
    <br />    
    <a href="../index.html">To Main Page</a>
    <br /><br />  

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>