<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - String &amp; Math </title>
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

<h1>Javascript - String, Math  </h1>

<h2>Primitive Wrapper Types Continued</h2>
    
    <p>This is a continuation of our last section where I will explain more about some of the functions you can use with regular expressions. We can start with the match, search and replace functions.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var text = "cat, bat, sat, fat";
    
    <span class = "comments">// our regular expression, use global modifier to return all matches</span>
    var pattern = /.at/g;
    
    <span class = "comments">// use the regexp call would be pattern.exec(text)</span>
    <span class = "comments">// store all possible matches in this array</span>
    var matches = text.match(pattern);
    
    <span class = "comments">// loop through the array and print the results to the console</span>
    for(var x in matches) {
        console.log(matches[x]);
    }
    
    <span class = "comments">// create another reg exp</span>
    var pattern2 = /sat/;
    
    <span class = "comments">// we can use the search function this time</span>
    console.log(text.search(pattern2));
    
    <span class = "comments">// the replace function replaces either a word or a reg exp</span>
    var text2 = text.replace(pattern2, "mr. man");
        
    <span class = "comments">// here we replaced every instance of /sat/ with 'mr. man'</span>
    console.log(text2); </pre>
    
    <p>The example above shows several instances of these string functions. Firstly we created a regular expression and used it as an argument in most of our string functions to find instances of that pattern.
    
    <span class = "nl">A regular expression could have been easily replaced by another string. In the case of using the replace function if we choose to use a string instead of a regular expression, then only the first instance of the string would have been replaced.</span></p>
    
    <hr />
    
    <h3>URI methods</h3>
    
        <p>There are a few methods which are used to encode and decode URI's (uniform resource identifies). There is encodeURI(), encodeURIComponent(), decodeURI() and decodeURIComponent().
    
        <span class = "nl">These methods are responsible for encoding and decoding uri's.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// specify the uri</span>
    uri = "http://www.funnystuff.com/funny pages.html#start";
    
    <span class = "comments">// encode the uri</span>
    console.log(encodeURI(uri));
    
    <span class = "comments">// encode every symbol in the uri</span>
    console.log(encodeURIComponent(uri));</pre>
    
        <p>As you would expect the decode methods decode the uri's once they are encoded. Using these methods are important for security reasons.</p>
    
    <hr />    
    
    <h3>Math methods</h3>
    
        <p>We can take a quick peak at some of the math methods before moving on learning how to use objects in javascript.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// find the largest number using Math.max() function</span>
    console.log(Math.max(3, 23, 42, 142, 0, 2));
    
    <span class = "comments">// these functions also work with arrays</span>
    numbers = [4, 5, 2, 10, 35];
    
    <span class = "comments">// display the lowest number</span>
    console.log(Math.min.apply(Math, numbers)); </pre>
    
    <p>These two methods max and min find the lowest or highest number of a group. Let's look at some rounding methods: ceil, floor, and round.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// this method will round up equal to or above .5</span>
    console.log(Math.round(23.49));
    
    <span class = "comments">// floor rounds everything down</span>
    console.log(Math.floor(23.9));
    
    <span class = "comments">// ceil rounds everything up</span>
    console.log(Math.ceil(23.1)); </pre>
    
    <p>There are a few more math methods but I won't show examples of all of them. One method you should take note of is the Math.random() method which, returns a random number between 0 and 1.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    console.log(Math.random());</pre>
    
    <p>That's it for this section, are next section will cover objects.</p>
    
    <script>
    // specify the uri
    uri = "http://www.funnystuff.com/funny pages.html#start";
    
    // encode the uri
    console.log(encodeURI(uri));
    
    // encode every symbol in the uri
    console.log(encodeURIComponent(uri));
    </script>
    
<hr />
<br />
<a href="Jscript12.php">Previous</a>
<span class = "next"><a href="Jscript14.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>