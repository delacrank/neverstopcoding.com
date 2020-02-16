<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Web Programming - Building a Shopping Cart Application 4</title>
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
    
<h2>Database connection, logout, field validation</h2>

    <p>Let's start by looking at the first script, database connection. This script also contains a function which in turn takes a value returned from a query to the database and assigns that value into an array. 
        
    <span class = "nl">We will talk about that more later, as well as what autocommit function does, and how we can disable it to use something called transactions.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Create a connection string</span>
    function db_connect() {
        $result = new mysqli('localhost', 'username', 'password', 'database');
        if(!$result) {
            return false;
        }
        <span class = "comments">// set commit equal to true</span>
        $result->autocommit(TRUE);
        return $result;
    }

    <span class = "comments">// converts a database array into a php array</span>
    function db_result_to_array($result) {
        $res_array = array();

        for($count = 0; $row = $result->fetch_assoc(); $count++) {
            $res_array[$count] = $row;
        }

        return $res_array;
    }</pre>
    
    <p>Our logout script contains a script. It first checks to see if someone is logged in, then it unsigns the session element 'admin_user' and destroys the current sessino. If all is successful it provides the user with an option to log in again.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    require_once('book_sc_fns.php');
    session_start();
    <span class = "comments">// first assign the current session to a variable</span>
    $old_user = $_SESSION['admin_user'];
    <span class = "comments">// unset that session and destroy the session</span>
    unset($_SESSION['admin_user']);
    session_destroy();

    echo do_html_header('Logging Out');

    <span class = "comments">// let the user know they were logged out and provide a link to login</span>
    if(!empty($old_user)) {
        echo '&lt;p>logged out.&lt;/p>';
        echo do_html_url('login.php', 'login');
    } else {
        <span class = "comments">// otherwise let the user know that they were never logged in</span>
        echo '&lt;p>You were not logged in, and so have not been logged out.&lt;/p>';
        echo do_html_url('login.php', 'login');
    }

    echo do_html_footer();</pre>
    
    <p>Let's look at our final script which has a function which uses a regular expression to check for a valid email and a function which checks the values of the fields to ensure they aren't empty.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function filled_out($form_vars) {
      <span class = "comments">// ensure that each field has a value or is not null</span>
      foreach ($form_vars as $key => $value) {
         if ((!isset($key)) || ($value == '')) {
            return false;
         }
      }
      return true;
    }

    function valid_email($address) {
      <span class = "comments">// check to see email address has a @ symbol and a . towards the end</span> 
      if (preg_match("^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $address)) {
        return true;
      } else {
        return false;
      }
    }</pre>
    
    
<hr />
<br />
<a href = "Web_Apps9.html">Previous Page</a>
<span class = "next"><a href = "Web_Apps11.html">Next Page</a></span>
<br /><br />

</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>     