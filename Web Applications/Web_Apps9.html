<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Shopping Cart Application 3</title>
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
<?php include('..//Includes//Left_Web_Apps.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Web Applications</h1>
    
<h2>Authentication</h2>
    
    <p>First let's look at the change password page. It contains mainly a bunch of functions, the first function (require_once) just contains the files to include the other functions. The require function makes it so that the script won't run unless that file is found and included.
    
    <span class = "nl">Next we start a session, neccessarily to see if a the administration has already been authenticated. Generate the html for the header, check the session variable by passing the check_admin_user() and then we can display the password form.</span>
    
    <span class ='nl'>It's important to seperate the html from our source code, not only for testing purposes but only for organization ones. The line two lines create a ling back to the admin page and the footer to end the page.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    require_once('book_sc_fns.php');
    session_start();
    echo do_html_header("Change adminstrator password");
    check_admin_user();
    echo display_password_form();
    echo do_html_url("admin.php", "Back to adminstration menu");
    echo do_html_footer();</pre>
 
    <p>Now, let's look what happens when we pass our values to the password form.</p>
    
    <em>Code:</em>
    <!--  code  -->
    <pre class ='code'>
    require_once('book_sc_fns.php');
    session_start();
    echo do_html_header('Changing password');
    check_admin_user();
    <span class = "comments">// Check all the values in the post array to see if they are empty</span>
    if (!filled_out($_POST)) {
        echo '&lt;p>You have not filled out the form completely.&lt;br />
                Please try again.&lt;/p>';
        echo do_html_url("admin.php", "Back to administration menu");
        echo do_html_footer();
        exit;
    } else {
        <span class = "comments">// assign those values to variables</span>
        $new_passwd = $_POST['new_passwd'];
        $new_passwd2 = $_POST['new_passwd2'];
        $old_passwd = $_POST['old_passwd'];
        <span class = "comments">// check that the new password matches</span>
        if($new_passwd != $new_passwd2) {
            echo '&lt;p>Passwords entered were not the same. Not changed.&lt;/p>';
        <span class = "comments">// check that the length is less then 16 characters but greater then 6</span>
        } else if ((strlen($new_passwd)>16) || (strlen($new_passwd)&lt;6)) {
            echo '&lt;p>New password must be between 6 and 16 characters. Try again.&lt;/p>';
        } else {
            <span class = "comments">// now pass these values into the change password function</span>
            if(change_password($_SESSION['admin_user'], $old_passwd, $new_passwd)) {
                echo '&lt;p>Password changed.&lt;/p>';
            } else {
            <span class = "comments">// otherwise return an error</span>
                echo '&lt;p>Password not changed.&lt;/p>';
            }
        }
    }
    echo do_html_url("admin.php", "Back to administration menu");
    echo do_html_footer();</pre>
    
    <p>This script is just about making sure that fields are filled out and that the values within those fields contain the correct amount of characters.  We have already seen the check_admin_function, and the change password function, so we have an understanding of what happens to those values once they get passed.
    
    <span class = "nl">Let's take a look at the logout, data valid and database connection scripts.</span></p>
        
<hr />
<br />
<a href = "Web_Apps8.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps10.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     