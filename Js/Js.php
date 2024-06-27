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
<?php include('..//Includes//Left_Js.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Introduction to Javascript Web Development</h1>

<!-- Hello World -->    
<h2>Hello World</h2>    

<p>The first thing we should know about javascript, is that it can be embedded into a regular xhtml document similar to css.  However, one of the first things we are required to do in order to enable it, is stype in '&lt;script type "text/javascript">' and then close our script tags after we are finished &lt;/script>.  Also, let's remember not to confuse javascript with the server side language java.  Javascript is a client side language used for manipulating client side data such as 'html, xml, asp, etc. (mark-up)'. 
    
    <span class="nl">Let's look at a small window in javascript which we can use to display the string 'hello, world'.</span></p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
&lt;script type ="text/javascipt">

    <span class="comments">// Display a pop up window</span>
    alert("hello, world!");
    
&lt;/script></pre>
<br />
<hr />
    
    
<!-- Variables -->
<h3>Variables</h3>
    
<p>So, we wrote our first line of code in Js, let's see what happens when we declare a variable and request our user to define it.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
&lt;script type ="text/javascript">
    
<span class="comments">// Declare the variable</span>  
var person = "";
    
<span class="comments">// Request Input</span>
person = prompt("What is your name?");
    
<span class="comments">// Display the variable</span>
alert("Hi " + person);

&lt;script></pre>
<br />
    
<!-- Example -->
<em>Example:</em><br /><br />
    
<button onclick="getName()">Click me</button>
<script>
function getName(){
// Declare the variable
var person = "";

// Request Input
person = prompt("What is your name?");

// Display the variable
alert("Hi " + person);
}
</script>
    
    
<p>I used a concatenation in order to combine the my variable with my string.  This way, I can display a string and still add my variable to my window.  Also, note that I used a prompt instead of an alert this time in order to query our definition from the user.
    
    <span class="nl">Also, notice how I used the keyword 'var' before our variable, to let javascript know what it was.</span>
    
Let's look at another example of working with variables and storing values into them. Only this time, we are going to replace an existing element with our javascript variable.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
<span class="comments">&lt;!--Html page--></span>
&lt;div id = "<span class="highlight">cost</span>"> Your cost here &lt;/div>
<span class="comments">&lt;!-- Make sure you add the script tag after your html --></span>
&lt;script src="script.js">&lt;/script></pre>
    
<br />
<pre class="code">
<span class="comments">// Javascript page</span>
var price;
var quantity;
var total;
    
<span class="comments">// Initialize the variables</span>
price = 5;
quantity = 14;
total = price * quantity;
    
<span class="comments">// store the location of an element in a variable</span>
var el = document.getElementById('<span class="highlight">cost</span>');
<span class="comments">// Change the context with the new information</span>
el.textContext = '$' +  total;</pre> 
    
<br />    
<hr />
    
<!-- Math -->
<h3>Performing mathetimatic equations</h3>
    
<p>We can also add, subtract, multiply and divide numbers in javascript similar to the way we preform math in other programming languages.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
&lt;script type="text/javascript">

var x = 5;
var y = 3;
var sum = x +  y;
alert(sum);

&lt;/script></pre>

<br />
<hr />
    
<a href="Js1.html"> Next page</a>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>