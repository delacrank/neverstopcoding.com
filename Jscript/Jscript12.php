<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Primitive Wrapper Types</title>
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

<h1>Javascript - Numbers, Strings and Objects </h1>

<h2>Primitive Wrapper Types</h2>
    
    <p>One thing to note is that each primitive data type in javascript has several methods which you can use to manipulate the data within it. In this section we are going to look into some of those methods which we can use to call on either a primitive data type or the object (number, string, object, etc.).
    
    <span class = "nl">We can start by using some casting methods, ex. below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// declare a string</span>
    var value = "25";
    
    <span class = "comments">// cast it to a number</span>
    var number = Number(value);
    
    <span class = "comments">// check the type</span>
    console.log(typeof number);
    
    <span class = "comments">// declare a number</span>
    var value1 = 25;
    
    <span class = "comments">// cast it to a string</span>
    var word = String(value1);
    
    <span class = "comments">// check the type</span>
    console.log(typeof word);
    
    <span class = "comments">// declare an string</span>
    var value2 = "something";
    
    <span class = "comments">// cast it to a string object</span>
    var obj = new String(value2);
    
    <span class = "comments">// check the type</span>
    console.log(typeof obj);</pre>
    
    <p>Suppose we try to call some of the methods from these data types, we would be able to better understand and manipulate the data within our datatype.
    
    <span class = "nl">We can start by first identifying the number methods.</span></p>
    
<hr />
    
<h3>Number Methods</h3>

    <p>The number object contains a set of methods for formatting purposes, these are good having a number display the amount decimal places that a number can contain. Let's look at a few example of using each of these methods.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var num1 = 13.4342
    
    <span class = "comments">// toFixed arguments used round by decimal point</span>
    console.log(num1.toFixed(1));
    
    <span class = "comments">// toPrecision arguments will convert number based on digits</span>
    console.log(num1.toPrecision(2));
    
    <span class = "comments">// toExponential arguments transforms number into scientific notiation</span>
    console.log(num1.toExponential(3));
    
    <span class = "comments">// toString arguments converts number into binary (2), octal (8) or hexidecimal (16)</span>
    console.log(num1.toString(16));</pre>
    
    <hr />
    
    <h3>String Methods</h3>
    
        <p>The string object provides us with a variety of different methods which we can use to rearrange, format, locate or isolate sections of a string. We can start with some simple calls and elaborate. </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var phrase = "hello world.";
    
    <span class = "comments">// length methods determines amount of cahracters in given string</span>
    console.log(phrase.length);
    
    <span class = "comments">// finds the character based on the index</span>
    console.log(phrase.charAt(3));
    
    <span class = "comments">// returns the charater based on the array of the string</span>
    console.log(phrase[3]);
    
    <span class = "comments">// also contains concat, and slice which we have went over already </span>
    <span class = "comments">// substring starts at the index and stops at the second index</span>
    console.log(phrase.substring(2, 7));
    
    <span class = "comments">// substr starts at the index and includes 'x' elements</span>
    console.log(phrase.substr(2, 7));
    
    <span class = "comments">// indexOf returns the index of the string or character</span>
    console.log(phrase.indexOf("e"));
    
    <span class = "comments">// trim, trimRight and trimLeft remove any whitespace based on the method call</span>
    console.log(phrase.trim());
    
    <span class = "comments">// toUpperCase() and toLowerCase converts the characters to upper or lower case</span>
    console.log(phrase.toUpperCase());</pre>
    
    <p>There a several more string methods which we will get into in our next section, for now take a moment to understand how each of these methods can be used to take a string apart.  String methods can be used in large sections of code to search for, or format certain strings which may be in a larger document.
    
    <span class="nl">The next section will explain how we use strings with regular expressions to search, find and replace chracters.</span></p>
    
<hr />
<br />
<a href="Jscript11.php">Previous</a>
<span class = "next"><a href="Jscript13.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>