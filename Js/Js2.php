<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Functions - JavaScript Web Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">    
<script type="text/javascript">  </script>    
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Js.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Functions - Javascript Web Development</h1>
    
<!-- Functions -->
<h2>Functions</h2>
    
    <p>Functions are used to divide work in to smaller more organized processes.</p>
    
<hr />    
    
<!-- Declaring a function -->    
<h3>Declaring a funciton</h3>
    
    <p>Function are similar to those created in other languages only we dont need to explicitly declare what type of function type we intend to create.  This is very similar to are variables which are all implicitly declared.  Let's look at an exmple of declaring and calling a function.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
<span class="comments">// Declaring the function</span>
function displaytext() { 
    var text = "We display this text from calling our function";
    alert(text);
}    
<span class="comments">// Calling the function</span>    
displaytext();</pre>
    
<br />
<hr />
<!-- Returning a value -->
<h3>Returning a value</h3>
    
<p>We can also pass data in and out of functions by using arguements to determine the outcome. The beauty of creating functions, is that we don't need to keep calling our alert function, within are existing function. 
    
    <span class = "nl">We just need to call the function as an arguement and it will return the value.  Now, we can use our alert function just once and substitute are other functions within that alert arguement.</span></p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
<span class="comments">// Setting a return value for a function</span>
function displaytext(number) { 
    if(number == 1) { 
        text = "hello";
    } else {
        text = "default"; 
    }    
    return text;
}
    
<span class="comments">// Calling the function with an arguement equal to one</span>
alert(displaytext(1));</pre>
    
<br />
<hr />

<!-- Passing Arguements -->
<h3>Passing Arguements</h3>
    
<p>How about declaring functions which can handle computations. Below, I will create a function which will find the area of a 2 deminisional shape based on width and hieght.</p>
 
<em>Code:</em>    
<!-- Code -->
<pre class="code">
function Area(width, height) {
    var area = width * height; 
    return area;
}
    
document.write(Area(3,5));</pre>
    
<br />
<hr />
    
<!-- Multiple computations -->    
<h3>Multiple computations</h3>
    
<p>Using an array to store multiple values. Let's say I wanted to use the same variables in a function to produce multiple results, for example, one element would result in the parameter of a shape and another element would produce the area of a shape.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
function Size(width, height) {
    var area = width * height; 
    var parameter = (width * 2) + (height * 2);
    var shapes = [area, parameter];
    return shapes;
}
    
document.write("Display area for width 3, lenght 2: " + Size(3,2)[0]);
document.write("&lt;br /> Display parameter for width 3, lenght 2: " + Size(3,2)[1]);</pre>
    
<br />
<hr />
    
<!-- Anonymous functions -->
<h3>Anonymous functions</h3>
    
    <p>An anonymous function is a function which hasn't been named.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
add = function(first, second) {
    return first + second;
} 

document.write(add(1,2));</pre>
<br />
<hr />
    
    
<a href="Js1.html">Previous Page</a>  <span class="next"><a href="Js3.html"> Next page</a></span>
<br /><br />  
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>