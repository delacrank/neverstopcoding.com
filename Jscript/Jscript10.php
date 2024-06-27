<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Functions revisited</title>
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

<h1>Javascript Functions revisited</h1>
    
    <h2>JS functions as pointers and values</h2>
    
    <p>We are going to revisit functions in this section and talk more about them and how they are used in javascript as objects, values and pointers.
    
    <span class = "nl">First let's look at several ways to declare a function.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// we will look at several ways to declare this same exact function</span>
    <span class = "comments">// we can create a function like this</span>
    function sum (num1, num2) {
        return num1 + num2;
    }
    
    <span class = "comments">// or we can declare a variable as a pointer and assign it to a function</span>
    var sum1 = function (num1, num2) {
        return num1 + num2;
    };
    
    <span class = "comments">// or we can use the Function constructor in order to create an object which adds</span>
    var sum2 = new Function("num1", "num2", "return num1 + num2");</pre>
    
    <p>In the second example we used the function as a value as the variable as a reference to that value. Let's see if we could use this function as a parameter in another function, such as the 'console.log()' function.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var number = function (num) {
        return num;
    };
    
    var string = function(name) {
        return name;
    };
    
    console.log(number(5) + 5);
    console.log("nice to meet you " + string("john")); </pre>
    
    <br />
    <hr />
    
    <h3>Function Internals</h3>
    
    <p>There are several methods which we can use in order to ensure that the proper arguments are being used at any given time when working with a function.
    
    <span class = "nl">One of the most common and known operators is the 'this' pointer. It ensures that the argument being used is coming from within the function and won't be confused with another variable which may have a similar name.</span>
    
    <span class = "nl">Below is an example.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// assign the window color to red</span>
    window.color = "red";
    
    <span class ="comments">// assign this object color to blue</span>
    var o = { color: "blue" };
    
    <span class ="comments">// use the 'this' pointer to identify the color var</span>
    function sayColor() {
        <span class = "comments">// will display red</span>
        console.log(this.color);
    }
    
    <span class = "comments">// invoking the function will simply display the value of the global color value (red)</span>
    sayColor();
    
    <span class = "comments">// assign the objects method to the function, which should be red now</span>
    o.sayColor = sayColor;
    
    <span class = "comments">// yet when we call it, the color still refers to the functions original color</span>
    o.sayColor(); </pre>
    
    <p>In the example above we had to variables both named color with two different values. One color refered to the global variable we set earlier which was assigned to red, the other variable was assigned to an object, that value was blue.
    
    <span class = "nl">The function we created simply takes a variable named color and prints it to the console. Since the color variable was assigned in the global scope to the window object earlier, our function will point to that variable.</span>
    
    <span class = "nl">Yet, after assigning the function to our object which points to the variable within our object (blue), the function still returns red. The reason for this is the 'this' operator, which ensures that the function will always reference an argument which is local to the function.</span>
    
    <span class = "nl">Let's look at another function object, the 'callee' property. It references the function name, in the example below it will refer to the factorial.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create a function that returns the factorial of a number</span>
    function factorial(num){ 
        if (num &lt;= 1) {
            return 1;
        } else {
            return num * factorial(num-1) 
        }
    } </pre>

    <p>Ideally this should be fine, if the argument is less then or equal to one then the function will return the number one, otherwise it will multiply the number by itself minus one until the number is reduced to one.
    
    <span class = "nl">The problem with this type of function is if we decide to change the value of fatorial later on and reference it to something other then this function declaration.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    factorial = function() {
        return 0;
    }</pre>
    
    <p>Now instead of the function calling itself it will simply return zero when its called again. Similar to the 'this' pointer, the arguments.callee property works by ensuring that the original factorial function is always called reguardless of the reference being changed.</p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create a function that returns the factorial of a number</span>
    function factorial(num){ 
        if (num &lt;= 1) {
            return 1; 
        } else {
            <span class = "comments">// Will always execute the local function reguardless of the reference changes</span>
            return num * arguments.callee(num-1)
        } 
    } </pre>
    
    <p>We will continue to talk about function internals in the next section. </p>
    
<hr />
<br />
<a href="Jscript9.php">Previous</a>
<span class = "next"><a href="Jscript11.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>