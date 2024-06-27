<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - BOM part 2</title>
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

<h1>Javascript - Understanding the BOM</h1>

    <p>In this section we are going to talk about using interval timers and system dialogs to confirm or prompt the user.</p>
    
<h2>Interval Timers</h2>
    
    <p>An interval timer is a way to pause the script for a set period of time, let's look at an example using an alert box.</p>
    
    <em>Code:</em>
    <!--  code -->
    <pre class="code">
    <span class = "comments">// set a timer to create an alert box within 1000 ms</span>
    setTimeout( function() {
        alert('say hello');
    }, 1000);  </pre>
    
    <p>Let's see how we can also cancel this timer before it ever executes, to do this let's place it in a variable.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// store the timer function in a variable</span>
    var t = setTimeout( function() {
        alert('say hello');
    }, 2000);
    
    <span class = "comments">// use the clearTimeout function to destroy it</span>
    clearTimeout(t);  </pre>
    
    <p>Great so we understand how to create an timeout function and clear it as well, now let's learn about how intervals work.  An interval is a function which will repeat within a set time period as determined by the argument.  Let's look at an example of this below.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create an interval function</span>
    setInterval( function() {
        alert('say hello');
    }, 3000);
    
    <span class = "comments">// this will create an alert box every 3000 ms</span></pre>
    
    <p>Let's see how we can pass another argument into our setInterval function that allows us to stop the intervals after a number of executions.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create a pointer to the interval function</span>
    var incrementInteval = null;
    
    <span class ="comments">// create function which clears the timer after 10 times</span>
    function incrementTimer() {
        var increment = 0;
     
        if(increment &lt; 10) {
            increment++;
            console.log('say hello', increment);
        } else {
            clearInterval(incrementInterval);
        }
    }
    
    <span class = "comments">// assign the function to our incrementInterval pointer</span>
    <span class = "comments">// the pointer will clear the interval after 10 times</span>
    incrementInterval = setInterval(incrementTimer, 1000);</pre>    
    
<hr />
<br />
<a href="Jscript21.php">Previous</a>
<span class = "next"><a href="Jscript23.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>