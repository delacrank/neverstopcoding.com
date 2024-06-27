<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Introduction to Javascript Web Programming</title>
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

<h1>Introduction to Javascript Web Development</h1>

<!-- Hello World -->    
<h2>Basics of JS</h2>    

    <p>The first thing to notice is that Javascript is a case sensitive language. Javascript is also run on an engine called ECMA (European Computer Manufacturers Script). 
    
    <span class = "nl">There are also different versions of the ECMA Script which certain browsers have implemented (the newest versions) and still some are behind.  This just means that you can't implement certain features of javascript on every single browser like: Oprah or IE6/IE7, etc.</span>
    
    <span class = "nl">Comments in Javascript are similar to the ones in other langauges like PhP, CSS or C#.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// this is a sinlge line comment</span>
    
    <span class = "comments">/* 
        this is a multiline comment    
    */</span></pre>
    
    <p>In order to see errors or debug your script you can always you the developer tools for your browser there is usually an extension for chrome, firefox or safari.</p>
    
    <hr />
    
    <h3>Including Javascript files</h3>
    
    <p>In order to include javascript into a file there are two ways to do this, either using an external file or using an inline style. Let's look at both versions below.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// The HTML5 way to include an inline style</span>
    &lt;script>
    &lt;/script>
    
    <span class = "comments">// Include an external file</span>
    &lt;script src="jsFile.js">&lt;/script> </pre>
    
    <hr />
    
    <h3>Variables and Data Types</h3>
    
        <p>There are exactly six data types in Javascript: undefined, null, boolean, string, number, and object. Javascript is an implicitly typed language, which means that variables are typed at runtime not compile time.  
            
        <span class = "nl">This is sometimes good and sometimes bad, its good in some ways because the developer doesn't have to waste time initializing every data type. However, it can be bad if for example you want to use a string type and the program reads your variable as a number which can lead to incorrect results.</span>
    
        <span class = "nl">There are several ways to check for these types of occurances. The first way is using the 'typeof' operator, and the second way is by using the comparsion operator '==='. Let's look at an example below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    &lt;script>
    <span class = "comments">// define two variables</span>
    var x = 5;
    var y = '5';
    
    <span class = "comments">// use the 'typeof' operator</span>
    console.log(typeof x);
    console.log(typeof y); 
    
    <span class = "comments">// use of casting and equality operator</span>
    console.log(x === parseInt(x));
    console.log(y === y.toString());
    &lt;/script></pre>
    
    <p>It is for this reason that labeling your variable with correct names is very important, you can put the word 'int' in front of a number variable for example, in order to no confuse it with another variable type.
    
    <span class = "nl">Then there is also the problem of type conversion which happens when you try to use a two variables in an expression which don't share the same type. Oftentimes the engine will convert one of the types into another type in order to compute the statement. Let's look at an example of this below and see what steps we can do in order to combat this problem.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// we don't have to separate our variables to different lines</span>
    var x = 5, y = '6';
    
    <span class = "comments">// will this return 11 or 56?</span>
    console.log(x + y); 
    
    <span class = "comments">// let's use a casting operator to ensure correct output</span>
    console.log(x + parseInt(y))</pre>
    
    <p>So here we can see in our first example the expression was intepreted as a two strings being concatenated, yet in the second example it was returned a sum of 5 and 6. If you want to convert a number to a float you can simply add a decimal to the end of the number or use the parseFloat() function.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// define a float</span>
    var x = 5.1;
    var y = "6.3";
    
    <span class = "comments">// these will return two different results</span>
    console.log(x + parseInt(y));
    <span class = "comments">// use parseFloat(), instead of parseInt() to avoid rounding</span>
    console.log(x + parseFloat(y));</pre>
    
    <p>In the next section we will explore string types.</p>
    
    
<hr />
<br />
<a href="Jscript1.html">Next Page</a>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>