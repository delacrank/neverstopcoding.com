<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Shopping Cart Application 2</title>
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

    <p>Let's look at the heart of the application which is the administrative tools of logging in and creating items.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// include functions</span>
    require_once('book_sc_fns.php');
    session_start();
    
    <span class = "comments">// Check admin username and pass</span>
    if(($_POST['username']) &amp;&amp; ($_POST['passwd'])) {
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];
        <span class = "comments">// authenticate the user if success</span>
        if(login($username, $passwd)) {
            $_SESSION['admin_user'] = $username;
        } else {
            <span class = "comments">// otherwise display error page</span>
            echo do_html_header('Problem:');
            echo '&lt;p>You could not be logged in.&lt;br />
            You must be logged in to view this page.&lt;/p>';
            echo do_html_url('login.php', 'login');
            echo do_html_footer();
            exit;
        }
    }
    
    <span class = "comments">// check authentication</span>
    echo do_html_header('Administration');
    if(check_admin_user()) {
        <span class = "comments">// if success display menu</span>
        echo display_admin_menu();
    } else {
        <span class = "comments">// otherwise display error message</span>
        echo '&lt;p>You are not authorized to enter the administration area.&lt;/p>';
    }
    echo do_html_footer();</pre>

    <p>This is basically just the authentication page. It contains the backend of a form which a user will submit to the server. This script will get the 'POST' array for the values of the username and password.
        
    <span class = 'nl'>Then those values are taken as parameters in our login function, which will check them against values existing in the database and return a boolean value of true or value based on if those values match (username and password).</span>
        
    <span class = 'nl'>If they match, then the administrative menu will be brought up, otherwise the script will display cannot be logged in and exit.</span> 
        
    <span class = 'nl'>Let's check the user login in addition to other authentication functions.</span>    
    </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    require_once('db_fns.php');

    <span class="comments">// check username and password</span>
    function login($username, $password) {
    <span class="comments">// create a connection to the database</span>
        $conn = db_connect();
        if(!$conn) {
            <span class="comments">// if fails return a false value</span>
            return false;
        }

        <span class="comments">// check database for username and password values as passed by function</span>
        $result = $conn->query("select * from admin
                                where username='".$username."'
                                and password = sha1('".$password."')");
                                
        <span class="comments">// if query fails return false value </span>
        if(!$result) {
            return false;
        }
        
        <span class="comments">// if query succeeds but fails to retun a row, return false</span>
        if($result->num_rows>0) {
            <span class="comments">// Otherwise return true</span>
            return true;
        } else {
            return false;
        }
    }

    <span class="comments"> // Checks to see if user has already been authenticated</span>
    function check_admin_user() {
        if(isset($_SESSION['admin_user'])) {
            return true;
        } else {
            return false;
        }
    }

    <span class="comments">// this function allows an administrator to change their password</span>
    function change_password($username, $old_password, $new_password) {

        <span class="comments">// check username and password first</span>
        if(login($username, $old_password)) {
            <span class="comments">// if success, establish a connection to the database</span>
            if(!($conn = db_connect())) {
                return false;
            }
            
            <span class="comments">// If a connection is established set password equal to new password</span>
            $result = $conn->query("update admin set password = sha1('".$new_password."')
                                    where username = '".$username."'");
            
            <span class="comments">// return true is query passes successfully</span>
            if(!$result) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }</pre>
    
    <p>The first function login takes two parameters and passes those parameters into a query. That query checks the database to see if the username and password exist. If those values do exsist then we can return a true value, and use that value in our script later on.
        
    <span class = "nl">Check_admin_user function just checks to see if the session array has a container set to the value of 'admin_user' returns a value (is not null).</span>    
    
    <span class = 'nl'>Change password takes three parameters, passes the first two into the login function and then if that returns true, it will update the database with the third parameter which is the new password.</span>
    
    <span class = 'nl'>Let's look at the connection string and some of the validation required for the forms, next.</span></p>

<hr />
<br />
<a href = "Web_Apps7.php">Previous Page</a>
<span class = "next"><a href = "Web_Apps9.php">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     