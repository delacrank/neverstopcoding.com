<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Using Cookies - PhP Programming</title>
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

        <h1>Using Cookies - PhP Programming</h1>
        
        <h2>Using Cookies</h2>
        
            <p>When creating a website which using a database we want to be track a users movements and store changes they make to our website.  One of the ways we can do this is by using Cookies which store that data on the Web browser or Sessions which store data on our server. </p>
        
    <em>Code: login_page</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # script login_page.php
    
        <span class="comments">// Check for errors before validating login</span>
        if (isset($errors) &amp;&amp; !empty($errors)) {
            echo '&lt;h1>Error!&lt;/h1>
            &lt;p>The following errors occured:&lt;br />';
            foreach ($errors as $msg) {
                echo " - $msg&lt;br />\n";
            }
            echo '&lt;/p>&lt;p>Please try again.&lt;/p>';
        }
    &#63;>
    
    &lt;h1>Login&lt;/h1>
    
    <span class="comments">// Create the form for our login</span>
    &lt;form action="login.php" method="post">
        &lt;p> Email Address: &lt;input type="text"
        name="email" size="20" maxlength="60" />
        &lt;/p>
        &lt;p> Password: &lt;input type="password"
        name="pass" size="20" maxlength="20" />
        &lt;/p>
        &lt;p> &lt;input type="submit" name="submit" value="Login" />&lt;/p>
    &lt;/form></pre> 
    
    <br />
        
    <em>Code: login_functions.php</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php #  script login_functions.php
    
        <span class="comments">// Redirect the user if they try to access page without proper authentication</span>
        function redirect_user ($page = 'index.php') {
            $url = 'http://' . $_SERVER['HTTP_HOST']
            .dirname($_SERVER['PHP_SELF']);
            $url = rtrim($url, '/\\');
            $url .= '/' . $page;
            header("location: $url");
            exit();
        }
    
        <span class="comments">// Initialize values from post into variables, check for empty values</span>
        function check_login($dbc, $email = '', $pass = '') {
            $errors = array();
        
            if (empty($email)) {
                $errors[] = 'You forgot to enter your email address.';
            } else {
                $e = mysqli_real_escape_string($dbc, trim($email));
            }
        
            if (empty($pass)) {
                $errors[] = 'you forgot to enter your pass';
            } else {
                $p = mysqli_real_escape_string($dbc, trim($pass));
            }
        
            <span class="comments">// Select values for the correct user</span>
            if (empty($errors)) {
                $query = "SELECT user_id, username FROM users WHERE email='$e'
                AND password ='$p'";
                $result =@mysqli_query($dbc, $query);
            
                if (mysqli_num_rows($result) == 1) {
                    $row = (mysqli_fetch_array ($result, MYSQLI_ASSOC));
                    return array(true, $row);
                } else {
                    $errors[] = 'The email address and password are not on file';
                }
            } 
            return array(false, $errors);
        }
    &#63;></pre>
    <br />
        
    <em>Code: login.php</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Script login.php
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require('login_functions.php');
            require('connection_string.php');
        
            <span class="comments">// Check values from post against values passed from check login function</span>
            list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
        
            <span class="comments">// Set cookies and send user to login successful page</span>
            if ($check) {
                setcookie ('user_id', $data['user_id']);
                setcookie ('username', $data['username']);
                redirect_user('loggedin.php');
            } else {
                <span class="comments">// Display errors</span>
                $errors = $data;
            }
            mysqli_close($dbc);
        }
        include('login_page.php');
    ?></pre>
    <br />
        
    <em>Code: loggedin.php</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Script loggedin.php

        <span class="comments">// Send user to back to homepage if cookie is null</span>
        if (!isset($_COOKIE['user_id'])) {
            require ('login_functions.php');
            redirect_user();
        }
    
        <span class="comments">// Display success message</span>
        echo "&lt;h1>Logged In!&lt;/h1>
        &lt;p>You are now logged in, {$_COOKIE['username']}!&lt;/p>
        &lt;p>&lt;a href=\"logout.php\">Logout&lt;/a>&lt;/p>";
    ?></pre>
    <br />
        
    <em>Code: logout.php</em>
    <!-- Code -->
    <pre class = "code">
    &lt;?php # Script logout
    
        <span class="comments">// Authenticate the user again</span>
        if (!isset($_COOKIE['user_id'])) {
            require('login_functions.php');
            redirect_user();
        } else {
            <span class="comments">// If authentication succeeds set the cookies to null, with negative time
            // on their counters and no access to other pages</span>
            setcookie ('user_id', '', time()-3600, '/', '', 0, 0);
            setcookie ('username', '', time()-3600, '/', '', 0, 0);
        }
    
        echo "&lt;h1> Logged Out!&lt;/h1>
        &lt;p>You are now logged out, {$_COOKIE['first_name']}!&lt;/p>";
    ?></pre>
    <br />
    
<?php # Script login.php
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require('login_functions.php');
        require('connection_string.php');
        
        list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
        include('loggedin.php');
        if ($check) {
setcookie ('user_id',$data['user_id']);
setcookie ('username',$data['username']);
redirect_user('PhP31.html');
} else {
    
            $errors = $data;
        }
        mysqli_close($dbc);
    } // end of main submit
    
    include('login_page.php'); */
?>
    <hr />    
        
    <h3>Understanding the Code.</h3>    
        
        <p>In order to understand this code we must first try to understand some of the additional functions which are being used first.</span>
            
    <span class = "nl"><b style="color: blue">Login_Page:</b> Let's cover the first script login_page.php, this is the first page the user will see and it will contain the form for validating the user.  Like many forms before this script we just have a section to display errors or send the user to login.php to post values to that script.</span>
        
    <span class = "nl">Before we can explain the login.php script we need to first understand some of the functions we created for it first.  Looking at the login_fuctions.php script can be intimadating at first, let's break it down.</span>
        
    <span class = "nl"><b style="color:red">Login_functions:</b> Function redirect_user(), this function is storing a location and using a header function to send that location to the browser.  In order create dynamic location we use our $_SERVER['HTTP_HOST'] value to determine the host (it can be either localhost or www.website.com).  The function dirname() with the argument $_SERVER['PHP_SELF'] is used to determine the name of the directory we are currently using and assign it to a subfolder.</span>
        
    <span class = "nl">So far this would look like 'localhost/directory_name'.  Next we have the variable $url which we have set equal to rtim() function and we have set the function to remove any backslashes from the url.  Finally, we add another function which adds a backslash and then the file named in our $page variable. We take the url and set it equal to the location of our header function.</span>
        
    <span class = "nl">header(localhost/directory_name/index.php);</span>
        
    <span class = "nl">Now, let's get to the meat of the script, validating the user email and password against values in our database.</span>
        
    <span class = "nl">Alright so the first thing we do is create another function which will check our users input values against empty one's.  We've done this before with our previous forms using the empty function and then setting a valid input equal to a variable.</span>
        
    <span class = "nl">After setting our password and email equal to the variables $p and $e our code will run through another condition assuming that it hasn't encountered any errors.  This is where we run our SQL queries and store the results in a variable called $result.</span>
        
    <span class = "nl">The first query we run will check to see that the values entered into our input forms exist in the database.  If both the email and password don't match then our errors array will return a boolean value of false and the user will see an error report.</span>
        
    <span class = "nl">Now, if the false are true then we will set them equal to another variable called $row and set them equal to an associtive array.</span>
        
    <span class = "nl"><b style="color:orange">Login:</b> The login script will first check to see if the post method has been sent.  If it has been passed we will require our connection script to connect to our database and then we will also require the functions we created earlier, so we add those.</span>
        
    <span class = "nl">In the next section we use a new function called list which will assign a variable to every value in its arguements.  Our check_login function returns two values one boolean and the other is an array, so we can assign those values to two variables called $check (boolean) and $data.</span>
        
    <span class = "nl">Our check login_function will return two types of values based on whether our login was sucessful or not.  If it was not successful then $check will return a false value and $data will contain an array of error messages.  If it was successful then $check will return a true value and $data will return an associative array containing the user_id, username and email.</span>
        
    <span class = "nl">If our $check variable is set equal to true then we can assign our $data value equal to cookies based on our array. Otherwise set our data value equal to our errors array. Then call our redirect_user function but set the argument to a page called loggedin.php.  If you remember before our redirect_user function will set the host and directory based on values stored in the $_SERVER so if we are on the localhost under a php folder then it will be set to those values and then end with the arguement.</span>
        
    <span class = "nl"><b style="color: green">Loggedin:</b> The final script will check if our cookie has been set to a value, if not it will redirect them to the page set in our redirect_user function default arguement (index.php).  However, if the cookie is set then the page will display a success message displayed with the users name and then give them the option to log out.</span>
        
    <span class = "nl"><b style="color: purple">Logout:</b> Just like setting cookies equal to a value, we can delete cookies by setting the value to null. When we used our login script to set our cookies we used several arguements, the username and then the value of our username from the database.</span>
        
        <span class = "nl">If we set the same cookie to the username without a value then it will remain empty, that's how our logout process works.</span></p>
        
        <hr />        
        <br />
        <a href = "PhP30.html"> Previous Page</a>
        <span class = "next">
        <a href = "PhP32.html">Next Page</a></span>
        <br />
        <br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html> 