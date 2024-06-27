<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Functions - JQuery Web Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style>
    .blue {
        color: blue;
    }
</style>
<script src="../jquery-3.3.1.min.js">  </script>     
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_JQuery.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Functions - JQuery Web Development</h1>

<!-- Functions -->    
<h2>Functions</h2>

    <p>When working with JQuery you can also declare or call functions using your special 'dollar sign' selector.  This is great because it saves you time and provides a nice short cut to working with your code.
    
    <span class = "nl">Below, I will show an example of what it looks like to create a function using JQuery.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
<span class="comments">// Use the 'functionName' to affect the selected element</span> 
$(#ok).functionName() {
    <span class="comments">// insert code</span>
});
    
<span class="comments">// We can tell the function what to do here</span>
functionName() {
    <span class="comments">// insert code</span>
};</pre>
    
<br />
<hr />
    
<!-- Understanding the ready function -->
<h3>The Ready Function</h3>
    
    <p>The first function we are going to take a look at is called the 'ready' function. It ensures that the entire page is loaded before any javascript code takes place.  What happens when you add javascript to a page is that all of your web code (html, css) is halted until the script is run. The ready function waits until your images, sound files, videos, etc. are loaded before tryingt o run any javascript scripts.
    
    <span class = "nl">Of course there is a simple solution to this, add the javascript code to the bottom of your webpage (right before the closing of the body tag). Then your page will load and your javascript will run without ruining your users experience.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
$(document).ready(function () {
    <span class ="comments">// javascript code in here</span>
});

<span class ="comments">// Shortcut to ready function also works just fine</span>
$(function() {
    <span class ="comments">// javascript code in here</span>
});
</pre>
    
<br />
<hr />
    
<!-- Changing content -->
<h3>Changing Content</h3>
    
    <p>JQuery has a lot of built in functions which allow you to add, remove or replace content. 
    
    <span class="nl">Let's look at some other functions for modifying content.  There are two more called '.append()' and '.remove()' you can select other elements and place them inside the arguements for those functions. </span></p>
    
<em>Code:</em>
<!-- code -->    
<pre class="code">
<span class="comments">// Declare the variable first</span>   
var <span class="highlight">$ok</span> =  ' Something funny.';
    
<span class="comments">// Now you can attach the element</span>
$('#ok2').append(<span class="highlight">$ok</span>);</pre>
<br />    
    
<em>Example:</em>
<p id = "ok">Content</p>
<button id ="btn1">Append</button> <button id="btn2">Remove</button>
    
<script>
var $ok = ' Something funny';    
    
$('#btn1').click( function() {
    $('#ok').append($ok);
});
    
$('#btn2').click( function() {
    $('#ok').remove();
});                 
</script>
    
<p>We could also add html tags inside the appended argument as long as we used our quotes and concatenated them properly.  Let's see how we can remove that content in are next example below.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
<span class="comments">// Remove all the elements in the argument</span>
$('#ok2').remove();

<span class="comments">// Replace all the elements with the argument</span>
$('#ok2').replaceWith('hello');
    
<span class="comments">// Adds elements before the tag</span>
$('#ok2').before('hello');
    
<span class="comments">// Adds element after the tag</span>
$('#ok2').after('hello');
    
<span class="comments">// Inserts into the element, similar to append only before the content</span>
$('#ok2').prepend('hello');
    
<span class="comments">// Inserts attributes into the element</span>
<span class="comments">// The first quote selects the attribute</span>
<span class="comments">// The second quote applies a value to that attribute</span>
$('#ok2').attr('id', 'ok3');
    
<span class="comments">// Removes attributes from the element</span>
$('#ok3').removeAttr('id');</pre>
    
<br />
<hr />
    
<!-- Css -->
<h3>Setting CSS elements</h3>
    
    <p>We can change our css styles using javascript as well.  There are two ways to do this.  The first way was the way I should you when adding an attribute, by using quotes and commas to seperate the selector from the value.
        
        <span class="nl">The second way deals with using object literal notation, this basically means that we would set our css styles using an object.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
<span class="comments">// first way</span>
$('#ok').css('color', 'blue');
    
<span class="comments">// second way</span>
$('#ok').css({
    'color': 'blue',
    'backgroundColor': 'red'
}); </pre>

<p>The difference between the two ways, is that I can add multiple styles using the second way.</p>
    
<em>Example:</em>
<p id="ok3">Hello</p>
<button id="btn3">Add css</button> <button id="btn4">Remove css</button>
    
<script>
$('#btn3').click(function(){
   $('#ok3').css({'color': 'blue',
    'backgroundColor' : 'red'});
});   
    
$('#btn4').click(function(){
   $('#ok3').css({'color':'', 'backgroundColor': ''});
});  
</script>
    
    
<hr />    
    
<!-- Each() -->
<h3>Each function</h3>
    
    <p>The '.each()' function is similar to the foreach loop in C sharp.  It will perform the function on each item in a collection, let's look at an example of it being used on some list items below.</p>

<em>Code:</em>
<!-- code -->
<pre class="code">
$(function () {
        $('li').each (function () {
            $(this).append(' hello ');
        });
});</pre>
<br />    
    
<em>Example:</em><br />
<ul id="ok4">
<li>one</li>
<li>two</li>
<li>three</li>  
</ul>
    
<button id="btn5">Each function</button> <button id="btn6">Remove</button>
    
<script>
$('#btn5').click(function () {
    $('#ok4 > li').each(function () {
        $(this).append('<span class = "ok1"> hello </span>');
    });
});
    
$('#btn6').click(function() {
    $('.ok1').remove();
});</script>  
    
<br />
<hr />
    
<a href="JQuery.html">Previous Page</a><span class="next">    
<a href="JQuery2.html"> Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>