<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Understanding Sessions - PhP Programming</title>
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
<?php include('..//Includes//Left_PhP.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Understanding Sessions - PhP Programming</h1>
    
        <h2>Understanding Sessions</h2>
        
            <p>A session is different from a cookie, where a cookie will store information on the users machine, a session will store the user information on the server.  In order to use sessions we just need to apply the session_start() function as well as setting our values to $_SESSION variables instead of $_COOKIE variables.
                
    <span class = "nl">We can use the same code as before if we make some adjustments the login, loggedin and logout scripts.  Basically any script which used a $_COOKIE variable.</span></p>
        
    <em>Code: login.php</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Script login.php
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require('login_functions.php');
            require('connection_string.php');
        
            <span class="comments">// Check values from post against values passed from check login function</span>
            list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
        
            <span class="comments">// Set session variables and send user to login successful page</span>
            if ($check) {            
                <span class="red">session_start();
                $_SESSION['user_id'] = $data['user_id'];
                $_SESSION['username = $data['username'];</span>          
                redirect_user('loggedin.php');
            } else {
                <span class="comments">// Display errors</span>
                $errors = $data;
            }
            mysqli_close($dbc);
        } 
        include('login_page.php');
    ?> </pre>
    <br />
        
    <em>Code: loggedin.php</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Script loggedin.php
        <span class="red">session_start();</span>
    
        <span class="comments">// Send user to back to homepage if cookie is null</span>
        if (!isset(<span class="red">$_SESSION['user_id']</span>)) {
            require ('login_functions.php');
            redirect_user();
        }
    
        <span class="comments">// Display success message</span>
        echo "&lt;h1>Logged In!&lt;/h1>
        &lt;p>You are now logged in, {<span class="red">$_SESSION['username']</span>}!&lt;/p>
        &lt;p>&lt;a href=\"logout.php\">Logout&lt;/a>&lt;/p>";
    ?></pre>
    <br />
        
    <em>Code: logout.php</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Script logout
        <span class="red">session_start();</span>
        
        <span class="comments">// Authenticate the user again</span>
        if (!isset(<span class="red">$_SESSION['user_id']</span>)) {
            require('login_functions.php');
            redirect_user();
        } else {
        <span class="comments">// Remove the session and cookies associated with it</span>
            <span class="red">$_SESSION = array();
            session_destroy();
            setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0);</span>
        }
        echo "&lt;h1> Logged Out!&lt;/h1>
        &lt;p>You are now logged out!&lt;/p>";
    ?></pre>
    
        <hr />        
        <br />
        <a href = "PhP31.html"> Previous Page</a>
        <span class = "next"><a href="PhP33.html">Next Page</a></span>
        <br />
        <br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html> 