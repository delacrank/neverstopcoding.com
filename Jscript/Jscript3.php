<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Operators Cont.</title>
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

<h1>Javascript Functions</h1>
    
    <h2>Working with functions</h2>
    
    <p>Declaring a function in javascript is similar to the way you would declare a function in php for example. This is because js is a dynamically typed language, this means we don't need to intiailize the function with a string or integer type. 
    
    <span class = "nl">Using the typeof operator on a function will simply return the type function, not the data which is returns.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// declare a simple function which says hello</span>
    function hello() {
        console.log("hello");
    }
    
    <span class = "comments">// invoke that function</span>
    hello(); </pre>
    
    <p>Let's see what it looks like to create a function where we can pass parameters into it.  A parameter is simply a way to use a value outside of the function use those variables for processing.
    
    <span class = "nl">Below are two examples where we concatenate two strings and add two numbers together using the same function. Also, noticed we used a new keyword 'return'. A return statement outputs the result of the function and also ends the execution of that same function.  This means any code below a return statement will not be executed.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    function Combine(x, y) {
        return x + y;
    }
    
    console.log(Combine(5, 4));
    console.log(Combine("hello ", "world.")); </pre>
    
    <hr />
    
    <h3>Scope Creep</h3>
    
    <p>The scope that exists in a function is relative to its own local scope. This means that a variable declared outside a function will not be able to be changed within a function. 
    
    <span class = "nl">Scope creep ensures that the two variables exist in separate scopes, and it is a way to protect our private and public variable from interacting with one another. Let's look at an example and understand what it means to pass by value.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var x = 5;
    
    <span class ="comments">// create a function that adds five to the existing number</span>
    function increase(x) {
        return x += 5;
    }
    
    <span class = "comments">// we can see that the variable is changed when we call the function</span>
    console.log(increase(x));
    <span class = "comments">// outside of the function, the variable remains the same</span>
    console.log(x);</pre>
    
    <p>Notice that we used compound assignment operator in this example. It adds five to x and also assigns that value to the existing x. It would be the same as writing this expression x = x + 5.
    
    <span class = "nl">Let's say for example that we declare a variable inside of a function without using the var keyword, javascript makes an exception for this. If we declare the function without using the var keyword and then call that function, we can actually use the variables initialized in that function as part of our global scope.</span>
             
    <span class = "nl">Below, we will see an example of this.</span> </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// declare a variable within a function without var keyword</span>
    function mung() {
        size = "big";
    }
    
    <span class = "comments">// invoke that function</span>
    mung();
    
    <span class = "comments">// now we can use that variable in our global scope</span>
    console.log(size); </pre>
    
    <p>In the next section we will go into understand what a reference is.</p>
    
<hr />
<br />
<a href="Jscript2.php">Previous</a>
<span class = "next"><a href="Jscript4.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>