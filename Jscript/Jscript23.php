<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - BOM part 3</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Jscript.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Javascript - BOM cont.</h1>

    <p>We previously spoke about the window object in reference to size and position, we also mentioned using timers like the set and interval Timer functions.  In this section we are going to go over using system dialog boxes and the navigation object.</p>
    
<h2>Dialog boxes</h2>
    
    <p>There are two main dialog boxes used besides the alert box, those are the confirm and prompt boxes.  They are created using either the OS or based on the browser application.
        
    <span class = "nl">The confirm box works by checking a users actions before executing a script. The prompt box works by accepting using input via the dialog box (as appose to an input box via html).</span>
    
    <span class = "nl">Let's see an example of both in action.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// the confirmation box passes a boolean value</span>
    var confirmation = confirm('Are you sure?');
    
    <span class = "comments">// we can check the value of that variable here</span>
    if(confirmation) {
        alert('great');
    } else {
        alert('alright, well best of luck');
    }</pre>
    
    <p>We can look at the prompt dialog box next.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// the prompt dialog box stores a value</span>
    var age = prompt('please input your age');
    
    <span class = "comments">// we can check the value of that variable here</span>
    if(age)
        alert('you are ' + age + ' years old');</pre>
    
    <p>Both, confirm and prompt boxes return boolean values, so passing them into an if statement is the surest way to check if users submitted a reponse. 
        
    <span class = "nl">With the prompt dialog, input should be of course cleaned and converted into proper data type.</span></p>
    
    <hr />
    
<h2>Location Object</h2>
    
    <p>The location object deals with retrieving information pertinent to the URL, this includes the: hash, host, hostname, href, pathname, port, protocol or search.  There is even a function which can reassign the URL or replace it. 
    
    <span class = "nl">First let's look at examples of returning parts of the URL using the location object.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var URL = location.href;
    var pathname = location.pathname;
    
    <span class = "comments">// display the full url</span>
    console.log(URL);
    
    <span class = "comments">// display current pathname (folder/director name)</span>
    console.log(pathname);</pre>
    
    <p>These tools are really great especially if you want to be able to direct your users away to towards certain directories or URL's. Sometimes, you need to know where exactly a user is located in order to tell the browser where to send him/her. 
    
    <span class = "nl">Let's look at three of the functions associated with the location object.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// you can change the URL like this</span>
    location.assign('http://www.google.com');
    
    <span class ="comments">// or like this</span>
    location.href = 'http://www.youtube.com';
    
    <span class ="comments">// using replace removes an entry history</span>
    location.replace('http://www.google.com');
    
    <span class ="comments">// reload the page from the cache</span>
    location.reload();
    
    <span class ="comments">// passing a true value reloads it from the server</span>
    location.reload(true);</pre>
    
    <p>The location object is great for understanding where users are coming from and for redirecting them to a different page or directory.</p>
    
<hr />
<br />
<a href="Jscript22.html">Previous</a>
<span class = "next"><a href="Jscript24.html">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>