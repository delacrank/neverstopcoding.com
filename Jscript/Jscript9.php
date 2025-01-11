<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - DateTime &amp; RegExp</title>
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

<h1>Javascript DateTimes and Regular Expressions</h1>
    
   <h2>JS DateTime and RegEx Classes</h2>
    
        <p>There are two classes one that handles datetimes and another one which handles regular expressions.  First let's quickly go over the class which can create instances of the DateTime class, which works by counting the amount of milliseconds after the year 1970.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// set the date</span>
    var Date = new Date("Janurary 29, 1986");
    
    console.log(Date.toString()); </pre>
    
        <p>This is good because now we have a way to set a value of time into a variable.
    
        <span class = "nl">Let's look at an example where we can format the time based using a variety of functions.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var date = new Date();
    
    <span class = "comments">// get time in milliseconds</span>
    console.log(date.getTime());
    <span class = "comments">// get time in Hours</span>
    console.log(date.getHours());
    <span class = "comments">// Day of the week</span>
    console.log(date.getDay());
    <span class = "comments">// Day of the month</span>
    console.log(date.getDate());
    <span class = "comments">// Month of the year</span>
    console.log(date.getMonth());
    <span class = "comments">// Current year</span>
    console.log(date.getFullYear());
    <span class = "comments">// display full time and time zone</span>
    console.log(date.toTimeString());
    <span class = "comments">// display full date</span>
    console.log(date.toLocaleDateString());</pre>
    
    <p>There are plenty of other date time functions and ways you can set the date and time as well. Above are just a few listed, next let's move on to using the Regular Expression class.</p>
    
    <hr />
    
    <h3>Regular Expressions</h3>
    
    <p>A regular expression is a way of finding a pattern of strings, numbers, or symbols within an existing string or number.
    
    <span class = "nl">Let's see two says we can set regular expression using the regular way and using the constructor.  Also, let's see how using these expressions can help us to test input for patterns of numbers, strings and symbols.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// var pattern = /pattern/flags</span>
    var pattern = /hi/g;
    
    <span class = "comments">// create two strings</span>
    var word = "grape";
    var word2 = "hiccup";
    
    <span class = "comments">// use the test method to determine if those strings have the pattern</span>
    console.log(pattern.test(word));
    console.log(pattern.test(word2));</pre>
    
    <p>The three types of flags you can set for a regular expression are: g for global mode, meaning all strings will be tested, i for case insensitive and m for multiline meaning it will keep testing for expressions behind the first line of a string.
    
    <span class = "nl">The above pattern was very simple and just tested the words to see if they contained the word hi in them. I won't get in depth into regular expressions here, I will just show how to declare them using the class.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// same as /[bc]at/i just using a constructor</span>
    var pattern2 = new RegExp("[bc]at", "i");
    
    <span class = "comments">// let's see if it works</span>
    console.log(pattern2.test("cat")); </pre>
    
    <p>A breif example of some of the RegExp functions will be below, then we will dive into understanding more about functions in the next section.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var sentence = "the cat has a very big bat";
    
    pattern = /(.)at/i;
    
    <span class = "comments">// test the sentence to see if our pattern appears</span>
    console.log(pattern.test(sentence));
    <span class = "comments">// this will display the input of a tested var</span>
    console.log(RegExp.input);
    <span class = "comments">// returns the string to the left of our reg exp</span>
    console.log(RegExp.leftContext);
    <span class = "comments">// returns the string to the right of our reg exp</span>
    console.log(RegExp.rightContext);
    <span class = "comments">// returns the last possible match of our </span>
    console.log(RegExp.lastMatch);
    <span class = "comments">// returns the lastParen property of the reg exp</span>
    console.log(RegExp.lastParen);
    <span class = "comments">// determines whether the string is a multiline string or not</span>
    console.log(RegExp.multiline);</pre>
    
<hr />
<br />
<a href="Jscript8.php">Previous</a>
<span class = "next"><a href="Jscript10.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>