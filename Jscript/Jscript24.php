<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - BOM part 4</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
    <style>
        li ol {
            display: none;
        }
        
        li:hover > ol {
            display: block;
        }
    </style>
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

    <p>This is the final section on the browser object model and we will cover just 3 more objects: navigator, screen and history.</p>
    
<hr />
    
<h2>Navigator Object</h2>
    
    <p>The navigator object is used for detecting the type of browser the client is using. Some of the object properties of the navigator object are used for detecting: browser name, if cookies are enabled, type of cpu processor, if java is enabled, browser language, if browser is online, operating system, platform, plugins used, brand name of the vendor, etc.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// browser name</span>
    console.log(navigator.appName);

    <span class = "comments">// check for cookies</span>
    console.log(navigator.cookiesEnabled);

    <span class = "comments">// type of cpu</span>
    console.log(navigator.cpuClass);

    <span class = "comments">// check for java</span>
    console.log(navigator.javaEnabled());

    <span class = "comments">// check if online</span>
    console.log(navigator.online);

    <span class = "comments">// check operating system</span>
    console.log(navigator.oscpu);

    <span class = "comments">// check platform</span>
    console.log(navigator.platform);

    <span class = "comments">// check for plugins</span>
    console.log(navigator.plugins);

    <span class = "comments">// check for vendor</span>
    console.log(navigator.vendor);</pre>
    
<hr />
    
<h2>Screen Object</h2>

    <p>The screen object determines the height and width of the screen. I will only cover some of the most commonly used properties used: height, width, availHeight, availWidth, colorDepth.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// display width</span>
    console.log(screen.width);
    
    <span class = "comments">// display height</span>
    console.log(screen.height);
    
    <span class = "comments">// display inner width</span>
    console.log(screen.availWidth);
    
    <span class = "comments">// display inner height</span>
    console.log(screen.availHeight);
    
    <span class = "comments">// display number of colors used</span>
    console.log(screen.colorDepth);</pre>
    
<hr />
    
<h2>History Object</h2>
    
    <p>The history object can move the page forward or backwards by using the data stored in the users history. This is a nice feature especially when as a programmer you aren't sure the exact URL or pathname previously traversed by the client.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// go back one page</span>
    history.go(-1);
    
    <span class = "comments">// go forward one page</span>
    history.go(1);
    
    <span class = "comments">// go forward two page</span>
    history.go(2);

    <span class = "comments">// go back one page</span>
    history.back();
    
    <span class = "comments">// go forward one page</span>
    history.forward();</pre>
    
    
    
<hr />
<br />
<a href="Jscript23.php">Previous</a>
<span class = "next"><a href="Jscript25.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>