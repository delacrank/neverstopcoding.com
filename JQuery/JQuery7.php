<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Animation Cont. - JQuery</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">  
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

<h1>jQuery Animations - JQuery Web Development</h1>
    
   <p>Animate is a function which allows us to customize the css properties we would like to change. Similar to how fade uses opacity to bring objects in and out of view, and slide uses the width/height properties to slide objects in and out of view.
    
   <span class = "nl">Animate will allow us to manipulate multiple css properties at once in order to generate a unique effect.</span></p>
    
<hr />
    
<h2>Animate function</h2>
    
    <p>Let's start by using a simple example, maybe changing the way our text may appear.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// our html</span>
    <span class = "comments">// set the position to relative in order to move it</span>
    &lt;p style='position: relative' id='message'>This is our message&lt;/p>
    
    <span class = "comments">// script</span>
    $('#message').animate(
     <span class = "comments">// takes an object literal</span>
     {
        left: '250px',
        opacity: .5,
        fontSize: '24px'
     },
     <span class = "comments">// amount of time for animation</span>
     1500
    ); </pre>
    
    <p>So far relatively simple, we changed the opacity, font-size, and position of the element using an object literal. Also, we didn't need to add css animation or css transitions to do the work for us. </p>
    
    <hr />
    
    <h2>Callback functions</h2>
    
    <p>Let's look at adding another animation to the end of one. This feature in javascript is actually called a 'callback' it is when we want to have another function execute directly after our first was complete.
    
    <span class = "nl">The way to accomplish this is by passing another function into the argument of an existing function and then calling that function after the first function is completed. Let's look at an example of this in plain js before we implement it in our jQuery.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// callback example</span>
    function sayHello(name, <span class ='red'>callback</span>) {
        alert('say hello' + name );
        <span class ='red'>callback();</span>
    }
    
    <span class = "comments">// we are going to use this as the callback</span>
    function hello() {
        alert('hello')
    }
    
    <span class = "comments">// now we can just invoke the function and pass in the callback</span>
    sayHello('june', <span class ='red'>hello</span>);</pre>
    
    <p>Great, now let's use callback functions in order to add after effects to our jQuery animations. Let's say we want to make a picture appear and then make the caption for the picture appear afterwards so it has more of an impact then both the picture and caption being animated simultaneously.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// html</span>
    &lt;img id='photo' src='pic.jpg'/>
    &lt;p id='caption'> This is a picture &lt;/p>
    
    <span class = 'comments'>// script</span>
    $('#photo').width(0).height(0).css('opacity', 0);
    $('#caption').hide();
    $('#photo').animate(
     {
        width: '200px',
        height: '100px',
        opacity: 1     
     },
     1000,
     <span class ="comments">// add our callback function here</span>
     function () {
        $('#caption').fadeIn(1000);
     }
    );</pre>
    
<!--    <img id='photo' src='../Images/ball.gif'/>
    <p id='caption'> This is a picture </p>
    
    <script>
    $('#photo').width(0).height(0).css('opacity', 0);
    $('#caption').hide();
    $('#photo').animate(
     {
        width: '200px',
        height: '100px',
        opacity: 1     
     },
     1000,
     // add our callback function here
     function () {
        $('#caption').fadeIn(1000);
     }
    );</script>
    -->
    
<br />
<hr />
    
<a href="JQuery6.html">Previous Page</a>
<!--<span class = "next"><a href='JQuery8.html'>Next Page</a></span>-->
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>