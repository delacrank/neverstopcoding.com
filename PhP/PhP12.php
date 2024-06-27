<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Session Variables - PhP Programming</title>
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
    
<h1>Session Variables - PhP Programming</h1>
    
<h2>Understanding Session Variables</h2>
    
    <p>So what is a session variable and how does it apply to our website?  A session is a unqiue experience that every user goes through when accessing content on a page.  Each session is unique to the client accessing the server at that time and each client has their own session id.
        
        <span class = "nl"> When talking about a session variable, I am referring to managing a variable that can only be accessed in a session.  Note that a session variable will be null ( 0 numerically speaking ) if it hasn't been intialized. Let's look at a quick example below.</span></p>

    <em>Code:</em>    
    <!-- Code --> 
    <pre class="code">
    &lt;?php
        <span class="comments">// start the session</span>
        session_start();
    &#63;>  
    &lt;h1> Session Variables &lt;/h2>
    &lt;?php
        <span class="comments">// set count equal to a session variable called count</span>
        $count = $_SESSION["count"];
        <span class="comments">// increment the variable by 1</span>
        $count++;
        <span class="comments">// Assign the session variable equal to the      incremented value</span>
        $_SESSION["count"] = $count;
        <span class="comments">// Print value stored in the session variable</span>
        print $count;
    &#63;></pre><br />
    
<em>Example:</em>  
<!-- Example --> 
<h1> Session Variables </h2>
<?php
$count = @$_SESSION["count"];
$count++;
$_SESSION["count"] = $count; 
print $count;
?> 
    
<p>Now, if you reload the page you will notice that our value is increasing every time.  This is because rather then the vallue in our variable being lost once we reload the page, it is stored in the session.  So it can retain the old value and add one to it.
    
    <span class = "nl">You should be wary about using session variables because they can be accessed using cookies and are liable to being hacked into if proper security measures aren't taken.  The data itself is stored on the server.</span>
    
    <span class = "nl">Let's say you wanted to remove data from the session variable, you can just use the 'unset' function like so.</span></p>    
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    unset($_SESSION["count"]);</pre>
    
    <p>Or we can take it one step further and delete the entire session by using the session destroy function.</p>    

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    session_destroy();</pre><br /> 
    
<hr />
<br />
<a href ="PhP11.html">Previous Page</a><span class ="next"><a href = "PhP13.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>