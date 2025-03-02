<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Python - Intro to Python Programming</title>
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
<?php include('..//Includes//Left_Python.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Intro to Python - Python Development</h1>
    
<h2>Downloading installing Python</h2>

    <p> If you are using windows you can pretty much just use Chocolately. I generally just type choco then name of application (choco install python), for linux you could just use apt-get install python. One thing to note about python is that its a dynamically typed language so we don't need to do much for creating variables.
        
    <span class = "nl">Below, I will show some examples.</span></p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code"><span class = "comments">// create two variables for first and last name</span>
<span class = "comments"># full_name.py</span>
first_name = "june"
last_name = "bug"
full_name = f"{first_name} {last_name}"
print(full_name)</pre>

<p>To run the application you just need to in the command python followed by the name of the application. In the program above we used several methods, the f method or format which can format our strings. Python also has other functions for dealing with strings: title(), string literals (/t, /n), lstring(), rstrip(). These functions can be called on the variable itself name.title().</p>

<em>Code:</em>    
<!-- Code -->
<pre class="code"><span class = "comments"># do math on numbers</span>
x = 5;
y = 6
NINE = 9;
print(x + y)
print(x - y)
print(x ** 3)
<span class = "comments"># error can't promote string to int</span>
print(x + " hello")
NINE = x + y</pre>

<p>Math is the same in python as it is in other languages. Two stars would for exponents. A constant declared in python is used in all caps and cannot be changed once declared.</p>

<br />
<hr />
    
<a href="Python1.php">Next Page</a>
<br /><br />  
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>