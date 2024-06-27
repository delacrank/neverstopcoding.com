<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Function Expressions</title>
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

<h1>Javascript - Function Expressions</h1>
    
<h2>Function Expressions</h2>
    
    <p>Previously we have worked with declaring functions and even assigning functions to a pointer using the assignment operator.  These two options provide us with more flexibility when trying to organize our program.  We have even used functions as a mean to create classes and declare objects.
    
    <span class ="nl">In this section we are going to talk about some of the more complex aspects of functions such as using closures and anonymous functions.</span></p>
    
    <hr />
    
<h2>Anonymous functions</h2>
    
    <p>An anonymous functions is a function which hasn't been declared, to look at an example let's see two functions one which is declared and one which hasn't been.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// declared function</span>
    function add(x, y) {
        return x + y;
    }
    
    <span class = "comments">// anonymous function</span>
    var sub =  function(x, y) {
        return x - y;
    }; 
    
    <span class = "comments">// we can invoke these both of these functions like so</span>
    console.log(add(10,5));    
    console.log(sub(10,5));</pre>
    
    <p>Notice that the difference between the two is the first function can be called without requiring a variable to be declared and without having to end the statement using a semi colon.
        
    <span class = "nl">In our anonymous function, sometimes referred to as a lamba expression, we needed to first declare a pointer variable and then assign our function to that pointer.</span></p>
    
    <hr />
    
<h2>Named function expressions</h2>
    
    <p>Let's look at a different type of function expression called a name function expression. It is similar to an anonymous function in that you can randomly assign it within another function or a variable, only it differs in that you provide it with a name.
    
    <span class = "nl">Let's look at an example of this in a recursive function used to find the value of a factorial.</span> </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// normally write the recursive function like so</span>
    factorial = function(i) {
        if ( i &lt;= 1) {
            return i;
        } else {
            return i * factorial(i - 1);
        }
    }
    
    <span class = "comments">// when invoked should return 4 * 3 * 2 * 1</span>
    console.log(factorial(4));
    
    <span class = "comments">// if we now assign this pointer to another variable</span>
    var anotherfactorial = factorial;
    
    <span class = "comments">// dereference the first pointer</span>
    factorial = null;
    
    <span class = "comments">// the internal function will now fail</span>
    console.log(anotherfactorial(4));</pre>
    
    <p>In the example above we created a function which calls itself until the argument is set to either 1 or less then 1. The problem with using this form of recursion is that it is dependent on the pointer referring to the function.
    
    <span class = "nl">This means if we ever dereference that pointer to free up memory our recursive function will no longer work. Let's see what would happened if we used a 'named function expression' to create the same recursive function for returning factorials.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// encapsulate the entire function parantheses, name the function</span>
    factorial = (function f(i) {
        if (i &lt;= 1) {
            return i;
        } else {
            return i * f(i - 1);
        }
    });
    
    <span class = "comments">// when invoked should return 4 * 3 * 2 * 1</span>
    console.log(factorial(4));
    
    <span class = "comments">// we can assign the function to another pointer</span>
    var anotherfactorial = factorial;
    
    <span class = "comments">// dereference the first pointer</span>
    factorial = null;
    
    <span class = "comments">// internal function keeps its naming convention</span>
    console.log(anotherfactorial(4));</pre>
    
    <hr />
    
    <h2>Closures</h2>
    
        <p>A closure is when we create a function within another function which makes use of the arguments of our outer function. This means that we have an inner function located within an outer function, only they share the same functional scope in terms of the parameters being passed.
    
        <span class = "nl">One example of this is comparison function, which compares two strings to see which one comes first.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// we can create a function which compares an array</span>
    function createComparsionFunction(<span class = "red">stringVar</span>) {
        <span class = "comments">// here we return a function which returns the larger value</span>
        return function(obj1, obj2) {
            var value1 = obj1[<span class = "red">stringVar</span>];
            var value2 = obj2[<span class = "red">stringVar</span>];
            if( value1 &lt; value2 ) {
                return 1;
            } else if ( value1 > value2 ) {
                return -1;
            } else  {
                return 0;
            }
        };
    } 
    
    <span class = "comments">// we need to first initialize our function with the name of our array</span>    
    var compare = createComparisonFunction('name');
    
    <span class = "comments">// we can determine the order of our array based on the function pointer</span>  
    console.log(compare({name: 'johnny'}, { name: 'june'}));</pre>
    
    <p>Closures are great for working with functions which require a degree of complexity greater then a normal function requires.</p>
        
<hr />
<br />
<a href="Jscript18.html">Previous</a>
<span class = "next"><a href="Jscript20.html">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>