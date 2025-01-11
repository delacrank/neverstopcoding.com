<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Strings</title>
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

<h1>Javascript Strings &amp; Operators</h1>

<!-- Hello World -->    
<h2>Working with strings</h2>    

    <p>First let's talk about string literals, these can be used with certain statements where strings are applied but will not work when your page is generating HTML. Here are several string literals: '\n' (newline), '\t' (tab), '\b' (backspace), '\r' (carriage return), '\f' (form feed), '\\' (backslash), '\'' (single quote), '\"' (double quote), etc.
        
    <span class = "nl">Let's look at an example of when we can use a string literal and when it will not work.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// generates html use (&lt;br /></span>
    document.write('hello \n hello');
    <span class = "comments">// generates a string in the log</span>
    console.log('hello \n hello');</pre>
    
    <p>In the first example, we have used a function which will generate HTML right into our webpage, but in the second example we used an example which will generate a string. Our string literal will not work in our second example.</p>
    
    <hr />
    
    <h3>String Conversion</h3>
    
    <p>In our previous example we saw how when writing an expression we could cast a string as a number, now let's look at an example where we want to do the opposite. We can use the 'toString()' function to cast a number as a string instead.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var x = 5, y = 6;
    
    <span class = "comments">// convert the second integer into a string</span>
    console.log(x + y.toString());</pre>
    
    <hr />
    
    <h3>Operators</h3>
    
        <p>There are several different types of operators we can use to execute mathematical expressions. First we have addition, subtraction, division, multiplication and modulus, below are some examples of how to use these operators.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// operators</span>
    
    <span class = "comments">// returns 7</span>
    console.log(3 + 4);
    
    <span class = "comments">// returns 12</span>
    console.log(3 * 4);
    
    <span class = "comments">// returns 4</span>
    console.log(12 / 3);
    
    <span class = "comments">// returns 2 because 12 divided by 5 is 2 remainder 2</span>
    console.log(12 % 5); </pre>
    
    
        <p>Let's take a moment to look at comparative operators which will return a boolean expression. These operators consist of Greater than, less than, greater than or equal to, less than or equal to, equal to, not equal to AND, OR, and NOT.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// true, comparing value of numbers</span>
    console.log(2 &lt; 1);
    
    <span class = "comments">// false</span>
    console.log(4 > 6);
    
    <span class = "comments">// true, comparing string values returns the order of the string values</span>
    console.log("a" &lt; "c");
    
    <span class = "comments">// comparing string to number types, true (conversion)</span>
    console.log("4" == 4);
    
    <span class = "comments">// comparing types in addition to values, false (even with conversion)</span>
    console.log("4" === 4);
    
    <span class = "comments">// using the not comparsion, false</span>
    console.log(4 != "4") </pre>
    
    
    <hr />
    
    <h3>IF Statement</h3>
    
        <p>Above we saw several examples of how to use these different comparsion operators in simple expressions. Now, let's make some more complex statements with the if statement and the AND, OR and NOT operators.
    
        <span class = "nl">In order for the and statement to be true both comparsion operators must equal true, for the OR statement either one of the comparsion statements can be true, and the not statement just simply inverts the boolean value.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var x = 5, y = 6;
    
    <span class = "comments">// check if x is less then 6</span>
    if(x &lt; 6)
        console.log("true, 1");
        
    <span class = "comments">// check if x is less then 6 and equal to 5</span>
    if((x &lt; 6) &amp;&amp; (x == 5))
        console.log("true, 2");
        
    <span class = "comments">// will not return a statement if x is actually equal to five</span>
    if(!(x == 5))
        console.log("true, 3");
        
    <span class = "comments">// will check either statement to see if one is true</span>
    if((x == "hello") || (y == 6))
        console.log("true");</pre>
    
    <p>The if statement simple executes the statement within the brackets and then executes the lines below it if that statement is true. However, if that statement is false then it will not perform the code below it.
    
    <span class = "nl">I won't spend time talking about else, or for loops because I have already covered those topics in detail in other code sections. In the next section I will go over to control statements which occur specifically in JS.</span></p>
    
    
<hr />
<br />
<a href="Jscript.php">Previous</a>
<span class = "next"><a href="Jscript2.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>